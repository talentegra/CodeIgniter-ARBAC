<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @property Login_control $Login_control
 * @property Arbac $arbac Description
 * @version 1.0
 */
class Example extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Arbac");
    }

    public function index() {

        if ($this->arbac->login('admin@example.co', '12345'))
            echo 'tmm';
        else
            echo 'hyr';
        //echo date("Y-m-d H:i:s");

        $this->arbac->print_errors();
    }

    function debug(){

        echo "<pre>";

        print_r(
        //$this->arbac->is_admin()
        //$this->arbac->get_user()
        //$this->arbac->control_group("Mod")
        //$this->arbac->control_perm(1)
        //$this->arbac->list_groups()
        //$this->arbac->list_users()
        //$this->arbac->is_allowed(1)
        //$this->arbac->is_admin()
        //$this->arbac->create_perm("deneme",'defff')
        //$this->arbac->update_perm(3,'dess','asd')
        //$this->arbac->allow(1,1)
        //$this->arbac->add_member(1,1)
        //$this->arbac->deny(1,1)
        //$this->arbac->mail()
        //$this->arbac->create_user('seass@asds.com','asdasdsdsdasd','asd')
        //$this->arbac->verify_user(11, 'MLUguBbXpd9Eeu5B')
        //$this->arbac->remind_password('seass@asds.com')
        //$this->arbac->reset_password(11,'0ghUM3oIC95p7uMa')
        //$this->arbac->is_allowed(1)
        //$this->arbac->control(1)
        //$this->arbac->send_pm(1,2,'asd')
        //$this->session->flashdata('d')
        //$this->arbac->add_member(1,1)
        //$this->arbac->create_user('asd@asd.co','d')
        //$this->arbac->send_pm(1,2,'asd','sad')
        //$this->arbac->list_pms(1,0,3,1)
        //$this->arbac->get_pm(6, false)
        //$this->arbac->delete_pm(6)
        //$this->arbac->set_as_read_pm(13)
        //$this->arbac->create_group('aa')
         $this->arbac->create_perm('asdda')
         //''

        );

        echo '<br>---- error --- <br>';
        echo $this->arbac->get_errors();

        echo '<br>---- info --- <br>';
        echo $this->arbac->get_infos();

        echo "</pre>";
    }

    function flash(){
        $d['a'] = 'asd';
        $d['3'] = 'asdasd';

        $this->session->set_flashdata('d', $d);

        $d['4'] = 'tttt';

        $this->session->set_flashdata('d', $d);
    }


    function settings() {
        
        //echo $this->arbac->_get_login_attempts(4);
        //echo $this->arbac->get_user_id('emre@emreakay.com');
        //$this->arbac->_increase_login_attempts('emre@emreakay.com');
        //$this->arbac->_reset_login_attempts(1);
    }

    public function login_fast(){
        $this->arbac->login_fast(1);
    }
    
    public function is_loggedin() {

        if ($this->arbac->is_loggedin())
            echo 'girdin';

        print_r( $this->arbac->get_user() );
    }

    public function logout() {

        $this->arbac->logout();
    }

    public function is_member() {

        if ($this->arbac->is_member('deneme',9))
            echo 'uye';
    }

    public function is_admin() {

        if ($this->arbac->is_member('Admin'))
            echo 'adminovic';
    }

    function get_user_groups(){
        //print_r( $this->arbac->get_user_groups());

        foreach($this->arbac->get_user_groups() as $a){

            echo $a->id . " " . $a->name . "<br>";
        }
    }

    public function get_group_name() {

        echo $this->arbac->get_group_name(1);
    }

    public function get_group_id() {

        echo $this->arbac->get_group_id("Admin");
    }

    public function list_users() {
        echo '<pre>';
        print_r($this->arbac->list_users());
        echo '</pre>';
    }

    public function list_groups() {
        echo '<pre>';
        print_r($this->arbac->list_groups());
        echo '</pre>';
    }

    public function check_email() {

        if ($this->arbac->check_email("aa@a.com"))
            echo 'uygun ';
        else
            echo 'alindi ';

        $this->arbac->print_errors();
    }

    public function get_user() {
        print_r($this->arbac->get_user());
    }

    function create_user() {

        $a = $this->arbac->create_user("admin@admin.com", "12345", "Admin");

        if ($a)
            echo "tmm   ";
        else
            echo "hyr  ";


        print_r($this->arbac->get_user($a));

        $this->arbac->print_errors();
    }

    public function is_banned() {
        print_r($this->arbac->is_banned(6));
    }

    function ban_user() {

        $a = $this->arbac->ban_user(6);

        print_r($a);
    }

    function delete_user() {

        $a = $this->arbac->delete_user(7);

        print_r($a);
    }

    function unban_user() {

        $a = $this->arbac->unban_user(6);

        print_r($a);
    }

    function update_user() {
        $a = $this->arbac->update_user(6, "a@a.com", "12345", "tested");

        print_r($a);
    }

    function update_activity() {
        $a = $this->arbac->update_activity();

        print_r($a);
    }

    function update_login_attempt() {
        $a = $this->arbac->update_login_attempts("a@a.com");

        print_r($a);
    }

    function create_group() {

        $a = $this->arbac->create_group("deneme");
    }

    function delete_group() {

        $a = $this->arbac->delete_group("deneme");
    }

    function update_group() {

        $a = $this->arbac->update_group("deneme", "zxxx");
    }

    function add_member() {

        $a = $this->arbac->add_member(8, "deneme");
    }

    function fire_member() {

        $a = $this->arbac->fire_member(8, "deneme");
    }


    function create_perm() {

        $a = $this->arbac->create_perm("deneme","def");
    }


    function update_perm() {

        $a = $this->arbac->update_perm("deneme","deneme","xxx");
    }

    function delete_perm() {

        $a = $this->arbac->update_perm("deneme","deneme","xxx");
    }

    function allow_user() {

        $a = $this->arbac->allow_user(9,"deneme");
    }


    function deny_user() {

        $a = $this->arbac->deny_user(9,"deneme");
    }

    function allow_group() {

        $a = $this->arbac->allow_group("deneme","deneme");
    }

    function deny_group() {

        $a = $this->arbac->deny_group("deneme","deneme");
    }

    function list_perms() {

        $a = $this->arbac->list_perms();
        print_r($a);
    }

    function get_perm_id() {

        $a = $this->arbac->get_perm_id("deneme");
        print_r($a);
    }


    function send_pm() {

        $a = $this->arbac->send_pm(1,8,'s',"w");
        $this->arbac->print_errors();
    }

    function list_pms(){

        print_r( $this->arbac->list_pms() );
    }

    function get_pm(){

        print_r( $this->arbac->get_pm(39,false));
    }

    function delete_pm(){

        $this->arbac->delete_pm(41);
    }


    function count_unread_pms(){

        echo $this->arbac->count_unread_pms(8);
    }

    function error(){

        $this->arbac->error("asd");
        $this->arbac->error("xasd");
        $this->arbac->keep_errors();
        $this->arbac->print_errors();

    }

    function keep_errors(){

        $this->arbac->print_errors();
        //$this->arbac->keep_errors();
    }

    function set_user_var(){
        $this->arbac->set_user_var("emre","akasy");
    }

    function unset_user_var(){
        $this->arbac->unset_user_var("emre");
    }

    function get_user_var(){
        echo $this->arbac->get_user_var("emre");
    }

    function set_system_var(){
        $this->arbac->set_system_var("emre","akay");
    }

    function unset_system_var(){
        $this->arbac->unset_system_var("emre");
    }

    function get_system_var(){
        echo $this->arbac->get_system_var("emre");
    }

}//end

/* End of file welcome.php */
