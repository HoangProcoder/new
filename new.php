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
//program
@system("clear");
echo $nau,(" ____        __    ____        ____     _____   ______   
/\  _`\    /'__`\ /\  _`\     /\  _`\  /\  __`\/\__  _\  
\ \ \/\_\ /\_\L\ \\\ \ \/\_\   \ \ \L\ \\\ \ \/\ \/_/\ \/  
 \ \ \/_/_\/_/_\_<_\ \ \/_/_   \ \  _ <'\ \ \ \ \ \ \ \  
  \ \ \L\ \ /\ \L\ \\\ \ \L\ \   \ \ \L\ \\\ \ \_\ \ \ \ \ 
   \ \____/ \ \____/ \ \____/    \ \____/ \ \_____\ \ \_\
    \/___/   \/___/   \/___/      \/___/   \/_____/  \/_/
                                                         
                                                         ");
echo ("\n");
echo $yellow,("+ C3C Create By: Le Quang Lam.\n
+ Tool Create By: Nguyen Huynh Tien Lam.\n
+ Advised by: Mai Bao Huy\n
              Nguyen Van Ha\n
              Nguyen Thang.\n");
echo $nau,("-------------------------\n");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Để chạy Bot không ảnh hưởng đến trải nghiệm, hệ thống của máy bạn phải đáp ứng yêu cầu sau:\n
+ Ram: 3gb trở lên\n
+ Rom: Còn trống ít nhất 4,5gb\n
+ Hệ điều hành: Android 5.0 trở lên\n
Nếu máy bạn đáp ứng những yêu cầu trên thì hãy nhấn \"Enter\" còn không hãy nhấn \"Ctrl+C\" :3\n");
readline();
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu.\n");
sleep(2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu..\n");
sleep(2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $yellow,("Đang tải dữ liệu...\n");
sleep(2);
echo $nau,("-------------------------\n");
echo $green,("Khởi động cài đặt Ubuntu 18...\n");
echo $nau,("-------------------------\n");
echo $green,("");
@system("cd /data/data/com.termux/files/home
pwd
pkg update -y && pkg install curl proot tar -y && curl https://raw.githubusercontent.com/AndronixApp/AndronixOrigin/master/Installer/Ubuntu/ubuntu-xfce.sh | bash");
echo ("\n");
echo $nau,("-------------------------");
echo $green,("Hoàn tất !");
echo $nau,("-------------------------");
sleep (2);
@system("clear");
echo $blue,("Chào mừng bạn đến với C3C BOT\n");
echo $nau,("-------------------------\n");
echo $green,("Khởi động Ubuntu...\n");
echo $nau,("-------------------------\n");
sleep("2");
echo $yellow,("Hãy sao chép và dán đoạn mã vào bên dưới (Không sao chép \"<\" và \">\" nhé):\n"), $green,
("<
apt-get install git\n
apt-get install php\n
git clone https://github.com/HoangProcoder/new\n
cd new\n
php install.php\n
ls\n
>\n
"), $yellow,
("Nếu thấy nó dừng lại quá lâu hãy nhấn \"y\" nhé\n");
echo $nau,("-------------------------\n");
echo $green,("");
@system("cd /data/data/com.termux/files/home/
bash ./start-ubuntu.sh");
?><?php 
