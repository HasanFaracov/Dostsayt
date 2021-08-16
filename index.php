<?php
include'header.php';
?>
<div class="container-fluid border-top border-bottom border-success">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Ana səhifə<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="haqqimizda.php">Haqqımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="etrafli.php">Ətraflı</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="elaqe.php">Əlaqə</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="orta">

<?php
if (isset($_POST['searchbtn'])){
    if(trim(lcfirst($_POST['searchtext']))=="kor"){
        echo '<div class="orta1"> <i class="fas fa-blind"></i>
                <h3>Kor - Görmə qabiliyyəti məhdud olan şəxs </h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="kar"){
        echo '<div class="orta1"><i class="fas fa-deaf"></i>
                <h3>Kar - Eşitmə qabiliyyəti məhdud olan şəxs</h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="lal"){
        echo '<div class="orta1"><i class="fas fa-volume-mute"></i>
                <h3>Lal - Nitq qabiliyyəti məhdud olan şəxs</h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="şikəst"){
        echo '<div class="orta1"><i class="fas fa-wheelchair"></i>
                <h3>Şikəst - Fiziki qüsurlu olan şəxs</h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="çəpgöz"){
        echo '<div class="orta1"><i class="fas fa-eye"></i>
                <h3>Çəpgöz - Strabizmi olan şəxs</h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="qozbel"){
        echo '<div class="orta1"><i class="fab fa-accessible-icon"></i>
                <h3></i>Qozbel - Kifozu olan şəxs</h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="lilliput"){
        echo '<div class="orta1"><i class="fas fa-child"></i>
                <h3>Lilliput - Gipofiza nanizmi olan şəxs</h3>
            </div>';
    }


    

    
    elseif(trim($_POST['searchtext'])==""){
        echo '
        <div class="orta1"> <i class="fas fa-blind"></i>
            <h3>Kor - Görmə qabiliyyəti məhdud olan şəxs </h3>
        </div>
        <div class="orta1"><i class="fas fa-deaf"></i>
            <h3>Kar - Eşitmə qabiliyyəti məhdud olan şəxs</h3>
        </div>
        <div class="orta1"><i class="fas fa-volume-mute"></i>
            <h3>Lal - Nitq qabiliyyəti məhdud olan şəxs</h3>
        </div>
        <div class="orta1"><i class="fas fa-wheelchair"></i>
            <h3>Şikəst - Fiziki qüsurlu olan şəxs</h3>
        </div>
        <div class="orta1"><i class="fas fa-eye"></i>
            <h3>Çəpgöz - Strabizmi olan şəxs</h3>
        </div>
        <div class="orta1"><i class="fab fa-accessible-icon"></i>
            <h3></i>Qozbel - Kifozu olan şəxs</h3>
        </div>
        <div class="orta1"><i class="fas fa-child"></i>
            <h3>Lilliput - Gipofiza nanizmi olan şəxs</h3>
        </div>
        ';
    }else{
        echo '<div class="orta1"><i class="fas fa-exclamation-circle"></i>
                <h3>Məlumat tapılmadı</h3>
            </div>';
    }
    






}else{
    echo '
    <div class="orta1"> <i class="fas fa-blind"></i>
        <h3>Kor - Görmə qabiliyyəti məhdud olan şəxs </h3>
    </div>
    <div class="orta1"><i class="fas fa-deaf"></i>
        <h3>Kar - Eşitmə qabiliyyəti məhdud olan şəxs</h3>
    </div>
    <div class="orta1"><i class="fas fa-volume-mute"></i>
        <h3>Lal - Nitq qabiliyyəti məhdud olan şəxs</h3>
    </div>
    <div class="orta1"><i class="fas fa-wheelchair"></i>
        <h3>Şikəst - Fiziki qüsurlu olan şəxs</h3>
    </div>
    <div class="orta1"><i class="fas fa-eye"></i>
        <h3>Çəpgöz - Strabizmi olan şəxs</h3>
    </div>
    <div class="orta1"><i class="fab fa-accessible-icon"></i>
        <h3></i>Qozbel - Kifozu olan şəxs</h3>
    </div>
    <div class="orta1"><i class="fas fa-child"></i>
        <h3>Lilliput - Gipofiza nanizmi olan şəxs</h3>
    </div>
    
    ';
}

?>



    

</div>

<?php include 'footer.php'?>