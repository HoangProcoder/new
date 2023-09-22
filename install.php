 ?><?php
@system("clear");
//colors
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blue="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$while="\033[1;37m";
echo $nau,("Tool create by NH Tien Lam\n");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Bắt đầu cài đặt Root...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("pkg install sudo");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động cập nhập hệ thống...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("apt-get update");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt Git...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("sudo apt-get install git");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt Curl...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("sudo apt install curl");
@system("sudo apt install curl build-essential");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt Node...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -");
@system("sudo apt install nodejs");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt build-essential...\n");
echo $nau,("-------------------------\n");
echo $green,("");
@system("sudo apt-get install build-essential libcairo2-dev libpango1.0-dev libjpeg-dev libgif-dev librsvg2-dev");
echo ("\n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Kết nối tới Github...\n");
echo $nau,("-------------------------\n");
sleep (3);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Cài đặt C3C BOT...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("cd /root
pwd
git clone https://github.com/HoangProcoder/legacy-c3cbot");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Bắt đầu cài đặt node_modems...\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
@system("cd /root/c3c
sudo npm i");
echo (" \n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Đang tạo Config.js...\n");
echo $nau,("-------------------------\n");
//taoconfig
$botname = ("C3CBot");
$fbemail = ("");
$fbpw = ("");
$dctk = ("");
$fbid = ("0");
$dcid = ("0");
$prf = ("/");
echo ("Mời bạn nhập tên bot:\n");
fscanf(STDIN,"%s\n",$botname);
while ($khfb == "")
{
    echo ("Bạn có muốn kích hoạt FB không(Y/N):\n");
    fscanf(STDIN,"%s\n",$kt);
    switch ($kt) {
        case "y":
        case "Y":
            $khfb = ("true");
            break;
        case "n":
        case "N":
            $khfb = ("false");
            break;
    };
};
$kt = ("");
if ($khfb == "true") {
    while ($fbemail == ""){
        echo ("Mời bạn nhập SĐT hoặc Email đăng nhập FB của Bot:\n");
        fscanf(STDIN,"%s\n",$fbemail);
    };
    while ($fbpw == ""){
        echo ("Mời bạn nhập mật khẩu FB của Bot:\n");
        fscanf(STDIN,"%s\n",$fbpw);
    };
    echo ("Mời bạn nhập FB ID của chủ Bot:\n");
    fscanf(STDIN,"%s\n",$fbid);
};
while ($khdc == "")
{
    echo ("Bạn có muốn kích hoạt DC không(Y/N):\n");
    fscanf(STDIN,"%s\n",$kt);
    switch ($kt) {
        case "y":
        case "Y":
            $khdc = ("true");
            break;
        case "n":
        case "N":
            $khdc = ("false");
            break;
    };
};
if ($khdc == "true") {
    while ($dctk == ""){
        echo ("Mời bạn nhập Token DC của Bot:\n");
        fscanf(STDIN,"%s\n",$dctk);
    };
    echo ("Mời bạn nhập DC ID của chủ Bot:\n");
    fscanf(STDIN,"%s\n",$dcid);
};
echo ("Mời bạn nhập kí tự đặt biệt để Bot nhận dạng(Mặc định là \"/\"):\n");
fscanf(STDIN,"%s\n",$prf);
$getconfig = ("{
    \"testmode\": false,
    \"botname\": \"$botname\",
    \"enablefb\": $khfb,
    \"usefbappstate\": true,
    \"fbemail\": \"$fbemail\",
    \"fbpassword\": \"$fbpw\",
    \"fb2fasecret\": \"BASE312OFSECRETKEY\",
    \"fbuseragent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063\",
    \"fblistenwhitelist\": false,
    \"fblisten\": [
        \"0\"
    ],
    \"facebookAutoRestartLoggedOut\": true,
    \"facebookProxy\": null,
    \"facebookProxyUseSOCKS\": false,
    \"facebookAllowOptionalResponseNoDelay\": true,
    \"facebookResponseDelayPerChar\": 30,
    \"portSOCK2HTTP\": 0,
    \"addressSOCK2HTTP\": \"127.0.0.1\",
    \"enablediscord\": $khdc,
    \"discordtoken\": \"$dctk\",
    \"discordlistenwhitelist\": false,
    \"discordlisten\": [
        \"0\"
    ],
    \"admins\": [
        \"FB-$fbid\",
        \"DC-$dcid\"
    ],
    \"blacklistedUsers\": [
        \"FB-0\",
        \"DC-0\"
    ],
    \"allowAdminUseRestartCommand\": true,
    \"allowAdminUseShutdownCommand\": false,
    \"allowUserUsePluginsCommand\": true,
    \"allowUserUseReloadCommand\": false,
    \"language\": \"vi_VN\",
    \"allowEveryoneTagEvenBlacklisted\": true,
    \"DEBUG_FCA_LOGLEVEL\": \"error\",
    \"enableSSHRemoteConsole\": false,
    \"sshRemoteConsoleIP\": \"0.0.0.0\",
    \"sshRemoteConsolePort\": 2004,
    \"sshUsername\": \"admin\",
    \"sshPassword\": \"c3cbot@ADMIN\",
    \"commandPrefix\": \"$prf\",
    \"autoUpdate\": true,
    \"autoUpdateTimer\": 60,
    \"configVersion\": 1,
    \"hideUnknownCommandMessage\": false
}");
$myfile = fopen("/root/c3c/config.json", "w+");
fwrite($myfile, $getconfig);
echo ("$getconfig\n");
//config
echo ("\n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
echo $green,("Nếu Config có gì không vừa ý, bạn có thể dùng GNU Nano để chỉnh lại sau :3");
echo $nau,("-------------------------");
sleep (3);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Tự động sửa lỗi nodejs...\n");
echo $nau,("-------------------------\n");
echo $green,("");
sleep (2);
@system("cd /root/c3c
sudo npm audit fix");
echo ("\n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Cảm ơn bạn đã sử dụng sản phẩm của C3C, bot của bạn đã được cài đặt.\n");
echo $green,("Bạn có muốn khởi động Bot không?\n(Nhấn *enter* để khởi động hoặc *ctr+c* để dừng lại)\n");
echo $nau,("-------------------------\n");
readline();
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Đang khởi động C3C Bot...\n(ctr+c để tắt Bot)\n");
echo $nau,("-------------------------\n");
echo $green,(" ");
sleep (2);
@system("cd /root/c3c
npm start");
?><?php 
