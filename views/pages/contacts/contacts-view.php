</header>

<body>
    <div class="container container-contacts">
        <div class="title-contacts text-center">
            <h2 class="d-inline">Contact me </h2><i class="fa-solid fa-file-signature" style="font-size: 25px;"></i>
        </div>
        <form method="POST" action="http://localhost/my-site/views/pages/contacts/form/form-email.php">
            <div class="row">
                <div class="col-6">
                    <label for="inputEmail4">Nome*</label>
                    <input name="name" id="name" type="text" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-6">
                    <label for="inputEmail4">Sobrenome</label>
                    <input name="last_name" type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Email*</label>
                <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" required>Mensagem</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="text-center form-group">
            <input class="btn btn-dark" type="submit" value="send">
            </div>
        </form>
    </div>

    </form>



</body>