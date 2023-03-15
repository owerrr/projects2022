<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <style>
        .card-header > h3{
            float:left;
        }
        .card-header > span{
            float:right;
        }
        @keyframes formAnimation{
          from{transform:translate(-50%,-50%) scale(0.5);}
          to{transform:translate(-50%,-50%) scale(1);}
        }
        #Form_Edit{
            width:512px;
            min-height:256px;
            padding: 20px 15px;
            background-color: rgb(50,50,50);
            box-shadow: 0px 20px 0px 0px rgb(40,40,40);
            position:absolute;
            top:50%;left:50%;
            transform:translate(-50%,-50%) scale(1);
            z-index:2;
            color:rgb(255,255,255);
            border-radius: 5px;
            display:none;
            animation: formAnimation .75s cubic-bezier(0.27, 0.45, 0, 1.66);
        }
        #Form_Edit_header{
            text-align:center;
        }
        #Form_Edit_header > hr{
            color:white;
            border: 1px solid white;
            background:white;
        }
        #Form_Edit_Inputs > form > .line > textarea{resize:none;min-height:150px;}
    </style>
    <div id="Form_Edit">
        <div id="Form_Edit_header">
            <h1 id="Form_Edit_header_id"></h1>
            <hr/>
        </div>
        <div id="Form_Edit_Inputs">
            <form method="POST" action="<?php echo ROOT_URL ?>views/ads/edit.php">
                <input type="hidden" id="form_edit_id" name="id" value="">
                <div class="line">
                    <label for="title" >Nazwa</label>
                    <input type="text" name="title" class="form-control" id="form_edit_title" required>
                </div>
                <div class="line">
                    <label for="content" >Opis</label>
                    <textarea name="content" class="form-control" id="form_edit_content" required></textarea>
                </div>
                <div class="line">
                    <label for="userid" >Użytkownik</label>
                    <select id="form_edit_userid" name="userid" class="form-select form-select-lg mb-3">
                        <?php
                            $users = (new User())->getAllUsers();
                            foreach($users as $user):
                        ?>
                        <option value=<?php echo $user['id'] ?>><?php echo $user['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="line">
                    <input type="submit" value="Zapisz" style="width:100%;" class="btn btn-success">
                    <input type="button" value="Anuluj" style="width:100%;margin-top:15px;" class="btn btn-secondary" onclick="handleEvent('closeEdit')">
                </div>
            </form>
        </div>
    </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo ROOT_URL ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL ?>ads">lista</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="handleEvent('addNew', 0)" style="cursor:pointer;">Dodaj</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION["is_logged_in"])): ?>
            <li class="nav-item"><a class="btn" href="<?php echo ROOT_URL ?>">Witaj <?php echo $_SESSION["user_data"]["name"] ?></a></li>
            <li class="nav-item"><a class="btn btn-danger" href="<?php echo ROOT_URL ?>users/logout">Wyloguj</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="btn" href="<?php echo ROOT_URL ?>users/login">Sign in</a></li>
            <li class="nav-item"><a class="btn btn-primary" href="<?php echo ROOT_URL ?>users/register">Sign up</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php Messages::display(); ?>
                <?php require($view); ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    function handleEvent(source, input, obj){
        if(source == "closeEdit"){
            document.querySelector("#Form_Edit").style.display = "none";
        }
        else if(input == null) return;
        if(source == "delete"){
            window.location = "<?php echo ROOT_URL ?>views/ads/delete.php?id="+input;
        }
        else if(source == "openEdit"){
          (document.querySelector("#Form_Edit_Inputs").children[0]).action = "<?php echo ROOT_URL ?>views/ads/edit.php"
          document.querySelector("#Form_Edit").style.display = "block";
          document.querySelector("#Form_Edit_header_id").innerHTML = "Ogłoszenie nr. "+input;
          document.querySelector("#form_edit_id").value = input;
          var card = obj.parentElement.parentElement.parentElement;
          var title = card.children[0].children[0].innerHTML;
          var content = card.children[1].children[0].innerHTML;
          document.querySelector("#form_edit_title").value = title;
          document.querySelector("#form_edit_content").value = content;
          document.querySelector("#form_edit_userid").selectedIndex = <?php echo ($_SESSION["user_data"]["id"])-1 ?>;
          window.scrollTo(0,0);
        }
        else if(source == "addNew"){
          (document.querySelector("#Form_Edit_Inputs").children[0]).action = "<?php echo ROOT_URL ?>views/ads/addnew.php"
            document.querySelector("#Form_Edit").style.display = "block";
            document.querySelector("#Form_Edit_header_id").innerHTML = "Dodaj ogłoszenie";
            document.querySelector("#form_edit_title").value = "";
            document.querySelector("#form_edit_content").value = "";
            document.querySelector("#form_edit_userid").selectedIndex = 0;
        }
    }
</script>
  </body>
</html>