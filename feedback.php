
<?php 


// if (!empty($errors)) {
//     var_dump($errors);
// }

include 'partials/header.php'; ?>





<h1>
	<a href="index.php">
		<img class="logo" src="img/logo.png"/>
	</a>
</h1>

<!-- Here is where you'll write your form... -->

<div class="container form">
	<div class="row">
		<div class="col-xs-12 col-lg-10 col-lg-offset-1 contact">

			<form action="mail.php" method="post">
				<div class="row row-sm-offset">

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<input value="<?= !empty($name) ? $name : '' ?>" type="text" class="form-control" placeholder="Full name" name="name" ><span class="text-danger"><?= !empty($errors['name']) ? $errors['name'] : '' ?> </span>
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<input value="<?= !empty($email) ? $email : '' ?>" type="email" class="form-control" placeholder="Email address" name="email" ><span class="text-danger"><?= !empty($errors['email']) ? $errors['email'] : '' ?> </span>
						</div>
					</div>

					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<input value="<?= !empty($phone) ? $phone : '' ?>" type="tel" class="form-control" placeholder="Phone number" name="phone" ><span class="text-danger"><?= !empty($errors['phone']) ? $errors['phone'] : '' ?> </span>
						</div>
					</div>

					<div class="col-xs-12 col-md-12">
						<div class="form-group">
							<textarea value="<?= !empty($phone) ? $phone : '' ?>" class="form-control" rows="10" name="feedback" placeholder="Type your message here"></textarea><span class="text-danger"><?= !empty($errors['phone']) ? $errors['phone'] : '' ?> </span>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg"  value="Submit">
						</div>
					</div>
				</div>
			</form>



		</div>

	</div>
</div>

<?php include 'partials/footer.php'; ?>