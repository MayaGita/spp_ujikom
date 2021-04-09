
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php if (!empty($page_title)) echo $page_title;?></title>

   
     <link href="<?=base_url('asset/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   
   <link href="<?=base_url('asset/')?>css/style.css" rel="stylesheet">   

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
     
       body{
        background-image: url(<?=base_url('asset/')?>/img/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
          }
        
        @media (max-width: 1200px) {
         body {
        height: 100vh;  
        margin-top: 100rem;  
        background-position: center ;
        background-repeat: no-repeat;
        background-size: cover;
        
         }
        }
        @media (max-width: 570px) {
         body {
        background-image: url(<?=base_url('asset/')?>img/bghp.jpg);
        height: 100vh;  
        margin-top: 100rem;  
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        
         }

       }

    </style>
</head>
