<?php
include'header.php';
?>
<div class="container-fluid border-top border-bottom border-success">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ana səhifə</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="haqqimizda.php">Haqqımızda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="etrafli.php">Ətraflı<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="elaqe.php">Əlaqə</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div class="ortaetraf">
<?php
if (isset($_POST['searchbtn'])){
    if(trim(lcfirst($_POST['searchtext']))=="anormal"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Anormal - Atipik<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="monqoloid"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Monqoloid - Daun sindiromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="pəltək"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Pəltək - Dislalisiyası olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="psix"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Psix - Psixi sağlamlıq məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="uzundıraz"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Uzundıraz - Artıq boya malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="autik"){
        echo '<div class="ortaetraf1">
                <h3><i class="fas fa-times-circle" id="redd"></i>Autik - Autizm sindromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
            </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="qozbel"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qozbel - Kifozu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="ağsaq"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Ağsaq - Hərəkət məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="dəli"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Dəli - Əqli inkişaf məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="çəpgöz"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Çəpgöz - Strabizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="gombul"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Gombul - Artıq çəkiyə malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="qoca"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qoca - Yaşlı və ya ahıl<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="qüsur"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qüsur - Sağlamlıq məhdudiyyətli şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="lilliput"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Lilliput - Gipofiza nanizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim(lcfirst($_POST['searchtext']))=="əlil"){
        echo '<div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Əlil - Əlilliyi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>';
    }
    elseif(trim($_POST['searchtext'])==""){
        echo '
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Anormal - Atipik<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Monqoloid - Daun sindiromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Pəltək - Dislalisiyası olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Psix - Psixi sağlamlıq məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Uzundıraz - Artıq boya malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Autik - Autizm sindromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Qozbel - Kifozu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Ağsaq - Hərəkət məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Dəli - Əqli inkişaf məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Çəpgöz - Strabizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Gombul - Artıq çəkiyə malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Qoca - Yaşlı və ya ahıl<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Qüsur - Sağlamlıq məhdudiyyətli şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Lilliput - Gipofiza nanizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div>
        <div class="ortaetraf1">
            <h3><i class="fas fa-times-circle" id="redd"></i>Əlil - Əlilliyi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
        </div> 
        ';
    }else{
        echo '<div class="ortaetraf1"><i class="fas fa-exclamation-circle"  id="reddm"></i>
                <h3>Məlumat tapılmadı</h3>
            </div>';
    }

}else{
    echo '
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Anormal - Atipik<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Monqoloid - Daun sindiromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Pəltək - Dislalisiyası olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Psix - Psixi sağlamlıq məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Uzundıraz - Artıq boya malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Autik - Autizm sindromu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qozbel - Kifozu olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Ağsaq - Hərəkət məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Dəli - Əqli inkişaf məhdudiyyəti olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Çəpgöz - Strabizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Gombul - Artıq çəkiyə malik olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qoca - Yaşlı və ya ahıl<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Qüsur - Sağlamlıq məhdudiyyətli şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Lilliput - Gipofiza nanizmi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div>
    <div class="ortaetraf1">
        <h3><i class="fas fa-times-circle" id="redd"></i>Əlil - Əlilliyi olan şəxs<i class="fas fa-check-circle" id="greenn"></i></h3>
    </div> 
    ';
}

?>
















        


    </div>




















<?php include 'footer.php'?>