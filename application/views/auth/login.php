<?php $this->load->view('template/header')?>

<!-- <main>
    <section>
        <form action="<?=base_url()?>index.php/User/login" method="post">
            <h1>LOGIN HERE</h1>
            <label >FIRST NAME</label>
            <input type="text" name="first_name" placeholder="Enter your first name"><br>
            <label for="last_name">LAST NAME</label>
            <input type="text" name="last_name" placeholder="Enter your last name"><br>
            <input type="submit" value="SUBMIT">
        </form>

    </section>
</main> -->


<main style="background-image:url(<?=base_url('/assets/img/sdca.png')?>)">
    

    <section class="register-section">
        <h1>LOGIN HERE</h1>
        <?php echo validation_errors(); ?>  
        <form action="<?= base_url()?>User/login" method="post">   
            <label>FIRST NAME </label><br>
            <input type="text" name="first_name" placeholder="Enter your first name" required/><br>
            <label>LAST NAME </label><br>
            <input type="text" name="last_name" placeholder="Enter your last name" required/><br>
            
            <input type="submit" class="button" name="Create" value="SUBMIT">
            <p>Don't have an account yet? <a href="<?=base_url()?>User/register">Register</a></p>
        </form>
    </section>
</main>
<?php $this->load->view('template/footer')?>