<?php $this->load->view('template/header') ?>

<main style="background-image:url(<?= base_url('/assets/img/sdca.png') ?>)">


    <section class="register-section">
        <h1>REGISTER!</h1>
        <?php echo validation_errors(); ?>
        <form action="<?= base_url() ?>User/create" method="post">
            <label>FIRST NAME </label><br>
            <input type="text" name="first_name" placeholder="Enter your first name" required /><br>
            <label>LAST NAME </label><br>
            <input type="text" name="last_name" placeholder="Enter your last name" required /><br>
            <label>GENDER </label><br>
            <input type="text" name="gender" placeholder="Enter your gender" required /><br>
            <label>EMAIL </label><br>
            <input type="text" name="email" placeholder="Enter your email" required /><br>
            <input type="submit" class="button" name="Create" value="SUBMIT">
            <p>Do you have an account? <a href="<?= base_url() ?>User/index">LOGIN</a></p>
        </form>
    </section>
</main>
<?php $this->load->view('template/footer') ?>