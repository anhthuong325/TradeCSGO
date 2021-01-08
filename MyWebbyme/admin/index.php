<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
   .ok {
    text-decoration: none;
  }
  .dieukien{
    width:100%;
    margin-bottom: 50px;
    text-align: center;
    background-color: khaki;

  }
  
</style>
<body>
    
    <header>
    <h1>Quản lí bán hàng</h1>
    <form method="get" action="../index.php">
      <button type="submit">Quay Lại Trang Chủ</button>
</form>
    </header>
<table class='dieukien' border=1px>
    <tr>
         <td><a class='ok'  href="?act=loai"><h3>Loại Sản Phẩm</h3></a></td>
         <td><a class='ok'  href="?act=sp"><h3>Sản phẩm</h3></a></td>
         <td><a class='ok'  href="?act=kh"><h3>Quản lí KH</h3></a></td>
   </tr> 
  </table>
   

    <article>
        <?php 
        if(isset($_GET["act"]))
        {
            $act = $_GET["act"];
        }
        else
        {
            $act ="";
        }
        switch($act)
        {
            case 'loai':
                if(isset($_GET["sua"]))
                {
                  include("updateloaisp.php");
                }
                
                if(isset($_GET["them"]))
                {
                  include("themloaisp.php");
                }include("showloaisp.php");
                
                
            break;
            
                
                
            break;
            case 'kh':
            
                if(isset($_GET["sua"]))
                {
                  include("updatekh1.php");
                }
                
                if(isset($_GET["them"]))
                {
                  include("themkh.php");
                }include("showkh.php");
            
        break;
        case 'sp':
            
          if(isset($_GET["sua"]))
          {
            include("updatesp.php");
          }
          
          if(isset($_GET["them"]))
          {
            include("themsp.php");
          }include("showsp.php");
      
  break;
            default:
            echo"Đây là trang chủ admin";
            
           
            
        }
       
         ?>
    </article>
    <footer>