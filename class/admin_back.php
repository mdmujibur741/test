<?php
          class admin_program{

          private $conn;

          public function __construct()
          {
                      $db_host="localhost";
                      $db_user="root";
                      $db_pass="";
                      $db_name="union";

                      $this->conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

                      if(!$this->conn){
                                         die('DATABASE CONNECTION ERROR!');
                      }
          }

                 function trade_insert($data){

                          $t_date=$data['t_date'];
                          $t_licence_no=$data['t_licence_no'];
                          $t_licence_day=$data['t_licence_day'];
                          $t_renewal_y=$data['t_renewal_y'];
                          $t_renewal_d=$data['t_renewal_d'];
                          $t_word=$data['t_word'];
                          $t_village=$data['t_village'];
                          $t_holding=$data['t_holding'];
                          $t_business_name=$data['t_business_name'];
                          $t_business_type=$data['t_business_type'];
                          $t_owner=$data['t_owner'];
                          $t_owner_dad=$data['t_owner_dad'];
                          $t_owner_mom=$data['t_owner_mom'];
                          $t_owner_adr=$data['t_owner_adr'];
                          $t_owner_adr_pr=$data['t_owner_adr_pr'];
                          $t_owner_adr_perm=$data['t_owner_adr_perm'];
                          $t_valid=$data['t_valid'];
                          $t_nid=$data['t_nid'];
                          $t_mobile=$data['t_mobile'];
                          $t_trade_fee=$data['t_trade_fee'];
                          $t_back_fee=$data['t_back_fee'];
                          $t_income_tax=$data['t_income_tax'];
                          // image code
                          $img= $_FILES['t_img'];
                          $img_name=$img['name'];
                          $img_size=$img['size'];
                          $img_temp=$img['tmp_name'];
                          $name_change=uniqid().".png";
                          $img_ext=pathinfo($img_name, PATHINFO_EXTENSION);


                           if($img_ext == 'jpg' or $img_ext== 'png' or $img_ext== 'jpeg'){
                                if($img_size <= 10485760){
                                    $query="INSERT INTO trade(t_date,t_licence_no,t_licence_day,t_renewal_y,t_renewal_d,t_word,t_village,t_holding,t_business_name,t_business_type,t_owner,t_owner_dad,t_owner_mom,t_owner_adr,t_owner_adr_pr,t_owner_adr_perm,t_valid,t_nid,t_mobile,t_trade_fee,t_back_fee,t_income_tax,t_img)
                                            VALUES('$t_date','$t_licence_no','$t_licence_day','$t_renewal_y','$t_renewal_d','$t_word','$t_village','$t_holding','$t_business_name','$t_business_type','$t_owner','$t_owner_dad','$t_owner_mom','$t_owner_adr','$t_owner_adr_pr','$t_owner_adr_perm','$t_valid','$t_nid','$t_mobile','$t_trade_fee','$t_back_fee','$t_income_tax','$name_change')";
                                    if(mysqli_query($this->conn, $query)){
                                           move_uploaded_file($img_temp,'upload/'.$name_change);
                                           header('location:trade_data.php');
                                           $msg="ট্রেড আবেদন সফল হয়েছে";
                                           return $msg;
                                    }
                              }else{
                                        $msg="Your File Size Should Be Less or Equal 10 MB!";
                                         return $msg;
                              }


                           }else{
                                  $msg = "Your File Must Be a JPG or PNG File!";
                                  return $msg;
                           }
                 }

              function display_trade(){
                     $query="SELECT * FROM trade ORDER BY id DESC";
                         $database=mysqli_query($this->conn,$query);
                         return $database;
              }

              function trade_form($id){
                     $query="SELECT * FROM trade WHERE id=$id";
                         $trade_form_data=mysqli_query($this->conn,$query);
                         return $trade_form_data;
              }

              function trade_edit($id){
                      $query="SELECT * FROM trade WHERE id=$id";
                      $edit_trade_info=mysqli_query($this->conn,$query);
                      return $edit_trade_info;
              }

              function trade_update($data){
                     $id=$data['id'];
                     $date=$data['u_t_date'];
                     $u_t_licence_no=$data['u_t_licence_no'];
                     $u_t_licence_day=$data['u_t_licence_day'];
                     $u_t_renewal_y=$data['u_t_renewal_y'];
                     $u_t_renewal_d=$data['u_t_renewal_d'];
                     $u_t_word=$data['u_t_word'];
                     $u_t_village=$data['u_t_village'];
                     $u_t_holding=$data['u_t_holding'];
                     $u_t_business_name=$data['u_t_business_name'];
                     $u_t_business_type=$data['u_t_business_type'];
                     $u_t_owner=$data['u_t_owner'];
                     $u_t_owner_dad=$data['u_t_owner_dad'];
                     $u_t_owner_mom=$data['u_t_owner_mom'];
                     $u_t_owner_adr=$data['u_t_owner_adr'];
                     $u_t_owner_adr_pr=$data['u_t_owner_adr_pr'];
                     $u_t_owner_adr_perm=$data['u_t_owner_adr_perm'];
                     $u_t_valid=$data['u_t_valid'];
                     $u_t_nid=$data['u_t_nid'];
                     $u_t_mobile=$data['u_t_mobile'];
                     $u_t_trade_fee=$data['u_t_trade_fee'];
                     $u_t_back_fee=$data['u_t_back_fee'];
                     $u_t_income_tax=$data['u_t_income_tax'];

                    $query="UPDATE trade SET t_date='$date',t_licence_no='$u_t_licence_no',t_licence_day='$u_t_licence_day',t_renewal_y='$u_t_renewal_y',t_renewal_d='$u_t_renewal_d',t_word='$u_t_word',t_village='$u_t_village',t_holding='$u_t_holding',t_business_name='$u_t_business_name',t_business_type='$u_t_business_type',t_owner='$u_t_owner',t_owner_dad='$u_t_owner_dad',t_owner_mom='$u_t_owner_mom',t_owner_adr='$u_t_owner_adr',t_owner_adr_pr='$u_t_owner_adr_pr',t_owner_adr_perm='$u_t_owner_adr_perm',t_valid='$u_t_valid',t_nid='$u_t_nid',t_mobile='$u_t_mobile',t_trade_fee='$u_t_trade_fee',t_back_fee='$u_t_back_fee',t_income_tax='$u_t_income_tax' WHERE id='$id'";

                    if($this->conn=mysqli_query($this->conn,$query)){
                        header('location:trade_data.php');
                        $msg="Data Updated Successfully";
                        return $msg;
                    }

              }

              function trade_delete($id,$img){
                     $get_img=$img;
                     $query="DELETE FROM trade WHERE id='$id'";
                     if($this->conn=mysqli_query($this->conn,$query)){
                            unlink("upload/$get_img");
                            $msg="DELETED SUCCESSFULLY";
                            return $msg;
                     }
              }


              function trade_data_search($data){
                           $owner=$data['owner'];
                           $dad=$data['owner_dad'];
                           $business_name=$data['business_name'];
                     $query="SELECT * FROM trade WHERE t_owner LIKE '%$owner%' AND t_owner_dad LIKE '%$dad%' AND t_business_name LIKE '%$business_name%'";
                    if(mysqli_query($this->conn, $query)){
                     $result=mysqli_query($this->conn, $query);
                     return $result;
                   }
              }

        }
?>