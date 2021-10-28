<body>
    
    <div class="container-lg my-4"> 

            <div class="p-5 mb-4 bg-light border rounded-3">
                <h1>Bienvenue <?=session('name');?></h1>
                <p>Votre email : <?= session('email'); ?></p>
                <?php echo anchor('signin/logout_user', 'Deconnexion', array('title'=>'Logout'))?>
            </div>
    </div>
</body>