
	<div class="row align-items-center justify-content-between bg-light py-3 px-xl-5 d-none d-lg-flex">
		<div class="col-lg-4">
			<a href="../" class="text-decoration-none">
				<span class="h1 text-uppercase text-white bg-dark px-2">Ada</span>
				<span class="h1 text-uppercase text-dark bg-white px-2 ml-n1"
					>Rumah</span
				>
			</a>
		</div>
		
		<div class="col-lg-4 col-6 text-right">
			<!-- seeder -->
				<!-- <div class="dropdown mx-2">
					<button
						class="btn btn-light dropdown-toggle"
						type="button"
						data-bs-toggle="dropdown"
						aria-expanded="false"
					>
						Seeder
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="service/seeder/user.php" class="dropdown-item">
								UserSeeder</a
							>
						</li>
						<li>
							<a href="service/seeder/post.php" class="dropdown-item">
								PostSeeder</a
							>
						</li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</div> -->
				<!-- account -->
				<div class="dropdown mx-2 ">
					<button
						type="button"
						class="btn btn-sm btn-light dropdown-toggle"
						data-toggle="dropdown"
					>
						<?= $_SESSION['name'] ?>
					</button>
					<ul class="dropdown-menu">
						<li>
							<form action="/service/action/logout.php" method="post">
								<button
									name="logout"
									class="bg-transparent border border-light px-4"
								>
									Logout
								</button>
							</form>
						</li>
						<li>
							<a href="#" class="dropdown-item">
								Profile
							</a>
						</li>
						<!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
					</ul>
				</div>
		</div>
	</div>
</div>
