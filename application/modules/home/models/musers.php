<?php

class Musers extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function getData($table) {
        $this->db->select("*");
        $this->db->from("$table");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function feedback($name, $mail, $content, $phone, $add) {
        $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
        $data = array(
            'name' => $name,
            'email' => $mail,
            'address' => $add,
            'phone' => $phone,
            'create_date' => $date,
            'content' => $content
        );
        $this->db->insert('contact', $data);
    }

    public function getProfile($userid) {
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(birthday, '%d-%m-%Y') AS birthofday", FALSE);
        $this->db->select("CONCAT(firstname ,' ',lastname) as fullname", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%e') AS day", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%m') AS month", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%Y') AS year", FALSE);
        $this->db->from('user');
        $this->db->where('userID', $userid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getCoin($uid) {
        $coin = $this->db->select("coin")->where('userID', $uid)->get("user")->row_array();
        return $coin['coin'];
    }

    public function insertUser($l_name = 0, $f_name = 0, $month = 0, $birthday = 0, $gender = 0, $phone = 0, $province = 0, $email = 0, $pass = 0, $adr = 0) {
        if ($this->input->post('Add')) {
            $userID = $this->setID('user', 'userID', 'UID');
            $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
            $data2 = array(
                'userID' => $userID,
                'firstname' => $f_name,
                'lastname' => $l_name,
                'email' => $email,
                'password' => $pass,
                'birthday' => $birthday,
                'gender' => $gender,
                'coin' => '0',
                'province' => $province,
                'phone' => $phone,
                'address' => $adr,
                'status' => '0',
                'create_date' => $date,
                'levelID' => '1'
            );
            $this->db->insert('user', $data2);
        }
    }

    public function insertGuest($guestID, $fullname = 0, $mail = 0, $phone = 0, $province = 0, $address = 0) {
        $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
        $data2 = array(
            'guestID' => $guestID,
            'fullname' => $fullname,
            'mail' => $mail,
            'phone' => $phone,
            'province' => $province,
            'address' => $address,
            'create_date' => $date,
        );
        $this->db->insert('guest', $data2);
        return $this->db->affected_rows();
    }

    public function updateGuest($guestID, $fullname = 0, $mail = 0, $phone = 0, $province = 0, $address = 0) {
        $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
        $data2 = array(
            'guestID' => $guestID,
            'fullname' => $fullname,
            'mail' => $mail,
            'phone' => $phone,
            'province' => $province,
            'address' => $address,
            'create_date' => $date,
        );
        $this->db->where("guestID", "$guestID")->update('guest', $data2);
        return $this->db->affected_rows();
    }

    public function updateProfile($userid = 0, $firstname = 0, $lastname = 0, $birthday = 0, $gender = 0, $phone = 0, $addr = 0, $province = 0, $email = 0) {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'gender' => $gender,
            'province' => $province,
            'phone' => $phone,
            'address' => $addr,
        );
        $newdata = array(
            'userID' => $userid,
            'fullname' => $firstname . ' ' . $lastname,
            'email' => $email,
            'logged_in' => TRUE
        );
        $this->db->where("userID", "$userid");
        $this->db->update('user', $data);
        $this->session->unset_userdata('user');
        $this->session->set_userdata('user', $newdata);
        redirect($this->uri->uri_string());
//        $this->session->set_userdata('user', $newdata);
    }

    public function sendMessage($receiver, $sender, $title, $content) {

        $mID = $this->setID('message', 'messageID', 'MSS');
        $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
        $data = array(
            'messageID' => $mID,
            'receiverID' => $receiver,
            'senderID' => $sender,
            'title' => $title,
            'content' => $content,
            'create_date' => $date,
            'status' => 0
        );
        $this->db->insert('message', $data);
        return $this->db->affected_rows();
    }

    //Kiem tra e-mail da ton tai hay chua?
    public function checkMail($email = 0) {
        $query = $this->db->select('email')->FROM('user')->WHERE('email', $email)->get()->row_array();
        if (isset($query) && count($query)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function changePass($email, $oldpass, $newpass) {
        $pwd = $this->db->select('password')->WHERE('email', $email)->get('user')->row_array();
        if (isset($pwd) && count($pwd)) {
            if ($this->encrypt->decode($pwd['password']) == $oldpass) {
                $newpass = $this->encrypt->encode($newpass);
                $this->db->where("email", "$email")->update('user', array('password' => $newpass));
                $ck = $this->db->affected_rows();
                (count($ck)) ? $check1 = TRUE : $check1 == FALSE;
            }
            else
                $check1 = FALSE;
        }
        else
            $check1 = FALSE;
        return $check1;
    }

    //lay san pham tu userID
    public function getProductByUID($uid, $sum = 10000, $start = 0) {
        $shopid = $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->From('products');
        $this->db->where("shopID", "$shopid");
        $this->db->limit($sum, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getShopByUID($uid) {
        $shop = $this->db->select("*")
                ->where("userID", "$uid")
                ->get("shop")
                ->row_array();
        if (count($shop))
            return $shop['shopID'];
    }

    public function changeStatusPro($proid, $uid, $status) {
        $shopid = $this->getShopByUID($uid);
        $this->db->where(array('productsID' => $proid, 'shopID' => $shopid));
        $this->db->update('products', array('status' => $status));
    }

    //lay tat ca hoa don da ban cua thanh vien
    public function getOrderByUID($Uid, $sum = 10000, $start = 0) {//đơn hàng đã nhận- dành cho chủ gian hàng
        $shopid = $this->getShopByUID($Uid);
        $this->db->select("*")
                ->select("DATE_FORMAT(create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(create_date, '%Y') AS year", FALSE)
                ->where("shopID", "$shopid")
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

    public function getOrder_UserBuy($oid, $buyid) {// chi tiet hoa don mua boi thanh vien
        return $this->db->select("
            tbl_order.orderID as orderID,
            tbl_order.buyerID as buyerID,
            tbl_order.note as note,
            tbl_order.method as method,
            tbl_order.status as status, 
            tbl_order.statusID as statusID, 
            shop.company as company,
            shop.phone as shopphone,
            shop.address as shopadd,
            shop.city as shopcity,
            shop.website as shopwebsite,
            user.email as buyeremail,
            user.phone as buyerphone, 
            user.address as buyeradd,
            bill_status.userID as action_uid")
                        ->select("CONCAT(user.firstname ,' ',user.lastname) as fullname", FALSE)
                        ->select("DATE_FORMAT(tbl_order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->select("DATE_FORMAT(user.birthday, '%Y') AS buyeryear", FALSE)
                        ->select("DATE_FORMAT(bill_status.action_date, '%d-%m-%Y, %H:%i %p') AS action_date", FALSE)
                        ->where("tbl_order.orderID", "$oid")
                        ->where("tbl_order.buyerID", "$buyid")
                        ->join('user', 'user.userID = tbl_order.buyerID')//xem thông tin người mua
                        ->join('shop', 'shop.shopID = tbl_order.shopID')
                        ->join('bill_status', 'bill_status.statusID = tbl_order.statusID')
                        ->get('tbl_order')->row_array();
    }

    public function getShopInfo($oid){
        return $this->db->select("
            shop.company as company,
            shop.phone as shopphone,
            shop.address as shopadd,
            shop.city as shopcity,
            shop.website as shopwebsite,")
                        ->where("tbl_order.orderID", "$oid")
                        ->join('shop', 'shop.shopID = tbl_order.shopID')
                        ->get('tbl_order')->row_array();
    }

    public function getOrder_GuestBuy($oid, $buyid) {//chi tiet hoa don mua boi khach vang lai
        return $this->db->select("
            tbl_order.orderID as orderID,
            tbl_order.buyerID as buyerID,
            tbl_order.note as note,
            tbl_order.method as method,
            tbl_order.status as status,
            tbl_order.statusID as statusID,
           
            guest.fullname as fullname,
            guest.mail as buyeremail,
            guest.phone as buyerphone,
            bill_status.userID as action_uid")
                        ->select("CONCAT(address ,' ',province) as buyeradd", FALSE)
                        ->select("DATE_FORMAT(tbl_order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->select("DATE_FORMAT(bill_status.action_date, '%d-%m-%Y, %H:%i %p') AS action_date", FALSE)
                        ->where("tbl_order.orderID", "$oid")
                        ->where("tbl_order.buyerID", "$buyid")
                        ->join('guest', 'guest.guestID = tbl_order.buyerID')//xem thông tin khách hàng vãng lai
//                        ->join('shop', 'shop.shopID = tbl_order.shopID')
                        ->join('bill_status', 'bill_status.statusID = tbl_order.statusID')
                        ->get('tbl_order')->row_array();
    }

    //lay tong gia tri cua don hang
    public function getValueOrder($orid) {
        $kq = $this->db
                ->select("sum(order_detail.quantity*products.price) as value")
                ->where("order_detail.orderID", "$orid")
                ->join('products', 'products.productsID = order_detail.productsID')
                ->get('order_detail')
                ->row_array();
        return (int) $kq['value'];
    }

    //Lay chi tiet don hang
    public function getOrderDetail($ordid) {
        return $this->db
                        ->select(" products.name as proname,
                    products.productsid as proid,
                    order_detail.quantity as number,
                    products.price as price")
                        ->where("order_detail.orderID", "$ordid")
                        ->join('products', 'products.productsID = order_detail.productsID')
                        ->get('order_detail')
                        ->result();
    }

    public function getOrderDetail_History($oid) {// chi tiet hoa don mua boi thanh vien
        return $this->db->select("
            tbl_order.orderID as orderID,
            tbl_order.shopID as shopID,
            tbl_order.note as note,
            tbl_order.method as method,
            tbl_order.status as status, 
            tbl_order.statusID as statusID, 
            shop.company as company,
            shop.phone as shopphone, 
            shop.city as shopcity,
            shop.address as shopadd,
            bill_status.userID as action_uid")
                        ->select("DATE_FORMAT(tbl_order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->select("DATE_FORMAT(bill_status.action_date, '%d-%m-%Y, %H:%i %p') AS action_date", FALSE)
                        ->where("tbl_order.orderID", "$oid")
                        ->join('shop', 'shop.shopID = tbl_order.shopID')//xem thông tin người ban
                        ->join('bill_status', 'bill_status.statusID = tbl_order.statusID')
                        ->get('tbl_order')->row_array();
    }

    //dem co bao nhieu hoa don chua xu ly cua thanh vien
    public function getNumOrderStatus($UID) {//lay so luong hoa don chua xu ly
        $shopid = $this->getShopByUID($UID);
        $this->db->select("status");
        $this->db->where(array('status' => 1, 'shopID' => $shopid));
        $qr = $this->db->get('tbl_order')->result();
        return count($qr);
    }

    public function checkOwnShop($UID) {//kiem tra thanh vien da dang ky gian hang hay chua?
        $this->db->select("*");
        $this->db->where("userID", "$UID");
        $qr = $this->db->get('shop')->row_array();
        if (count($qr))
            return $qr;
        else
            return FALSE;
    }

    public function getNumMessageUnread($UID) {//lay so luong tin nhan chua doc
        $this->db->select("status");
        $this->db->where(array('status' => 0, 'receiverID' => $UID));
        $qr = $this->db->get('message')->result();
        return count($qr);
    }

    public function getNumOrderHistory($UID) {//lay so luong tin nhan chua doc
        $this->db->select("buyerID");
        $this->db->where("buyerID", "$UID");
        $qr = $this->db->get('tbl_order')->result();
        return count($qr);
    }

    public function getNumProductsUnactive($UID) {//lay so luong san pham chua duyet
        $shopid = $this->getShopByUID($UID);
        $this->db->select("status");
        $this->db->where(array('status' => 3, 'shopID' => $shopid));
        $qr = $this->db->get('products')->result();
        return count($qr);
    }

    public function getNumProductsExpiration($UID) {//lay so luong san pham chua duyet
        $shopid = $this->getShopByUID($UID);
        $this->db->select("status");
        $this->db->where(array('status' => 4, 'shopID' => $shopid));
        $qr = $this->db->get('products')->result();
        return count($qr);
    }

    //lay tat ca hoa don da dat cua thanh vien
    public function getOrderByBuyerID($buyerid, $sum = 10000, $start = 0) {//đơn hàng đã đặt - dành cho người mua hàng
        $this->db->select("
            tbl_order.orderID as orderID,
            tbl_order.buyerID as buyerID,
            tbl_order.note as note,
            tbl_order.method as method,
            tbl_order.status as status, 
            shop.company as company, 
            shop.phone as shopphone, 
            shop.address as shopadd,
            shop.city as shopcity")
                ->select("DATE_FORMAT(tbl_order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%Y') AS year", FALSE)
                ->where("tbl_order.buyerID", "$buyerid")
                ->join('shop', 'shop.shopID = tbl_order.shopID')
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

    /////////////////lịch sử nạp tiền
    public function historyMoney($uid, $sum = 100, $start = 0) {
        $this->db->select("*")
                ->select("DATE_FORMAT(create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->where("userID", "$uid")
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('transaction', $sum, $start);
        return $query->result();
    }

    ///////////////////////////////////////////
    //lay tat ca tin nhan cua thanh vien
    public function getMessageByUID($Uid, $sum = 10000, $start = 0) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content,message.status AS status,user.levelID as LVsender');
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.receiverID', $Uid);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        $this->db->order_by('message.create_date', 'desc');
        $query = $this->db->get('message', $sum, $start);
        return $query->result();
    }

    public function getMessageByID($id) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content');
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.messageID', $id);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        return $query = $this->db->get('message')->row_array();
    }

    public function changeMessageStatus($id) {
        $data = array(
            'status' => 1
        );
        $this->db->where('messageID', $id)->update('message', $data);
    }

    public function getLevel($userID) {
        $this->db->select("levelID");
        $this->db->where("userID", "$userID");
        $query = $this->db->get('user')->row_array();
        return $query['levelID'];
    }

    //chen khoa chinh $pri_key tai bang $table voi ky tu $name o dau va cac chu so dang sau tang dan
    public function setID($table, $pri_key, $name) {
        $lengn = strlen($name) + 1;
        $max = $this->db->select("max(
                                     CONVERT( 
                                        TRIM( LEADING 0 FROM SUBSTRING(
                                            $pri_key FROM $lengn FOR LENGTH($pri_key)
                                                    )
                                                ), SIGNED INTEGER)
                                            ) as abc", FALSE)
                        ->get($table)->row_array(); //Lay chu so lon nhat cua khoa chinh trong bang
        if (!isset($max) && count($max) < 1) {
            return $id = $name . '00001';
            exit();
        }
        $max2 = (int) $max['abc'] + 1;
        $id = $name . $max2;
        $leng = strlen($id);
        while ($leng <= 7) {
            $ar1 = substr($id, strlen($name), $leng);
            $ar2 = rtrim($id, $ar1);
            $id = $ar2 . '0' . $ar1;
            $leng++;
        }
        return $id;
    }

}

?>
