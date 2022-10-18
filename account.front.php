<!DOCTYPE html>
<html lang="en">

<head>
	<title>My Account - Classmates</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon">
</head>

<body class="app">
<?php
include("login.php");
?>
	<header class="app-header fixed-top">

		<!--//Upper Nav panel-->
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="app-utilities col-auto">

							<!--//Notification-->
							<div class="app-utility-item app-notifications-dropdown dropdown">

								<!--//Notification Icon-->
								<a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
									data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
									title="Notifications">
									<svg width="26" height="26" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19.3419 14.49L18.3419 12.83C18.1319 12.46 17.9419 11.76 17.9419 11.35V8.82C17.9419 6.47 16.5619 4.44 14.5719 3.49C14.0519 2.57 13.0919 2 11.9919 2C10.9019 2 9.9219 2.59 9.4019 3.52C7.4519 4.49 6.1019 6.5 6.1019 8.82V11.35C6.1019 11.76 5.9119 12.46 5.7019 12.82L4.6919 14.49C4.2919 15.16 4.2019 15.9 4.4519 16.58C4.6919 17.25 5.2619 17.77 6.0019 18.02C7.9419 18.68 9.9819 19 12.0219 19C14.0619 19 16.1019 18.68 18.0419 18.03C18.7419 17.8 19.2819 17.27 19.5419 16.58C19.8019 15.89 19.7319 15.13 19.3419 14.49Z"
											fill="white" />
										<path
											d="M14.8297 20.01C14.4097 21.17 13.2997 22 11.9997 22C11.2097 22 10.4297 21.68 9.87969 21.11C9.55969 20.81 9.31969 20.41 9.17969 20C9.30969 20.02 9.43969 20.03 9.57969 20.05C9.80969 20.08 10.0497 20.11 10.2897 20.13C10.8597 20.18 11.4397 20.21 12.0197 20.21C12.5897 20.21 13.1597 20.18 13.7197 20.13C13.9297 20.11 14.1397 20.1 14.3397 20.07C14.4997 20.05 14.6597 20.03 14.8297 20.01Z"
											fill="white" />
									</svg>


									<span class="icon-badge">2</span>
								</a>

								<!--//Notification drop down Contents-->
								<div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">

									<!--//dropdown-menu-Title-->
									<div class="dropdown-menu-header p-3">
										<h5 class="dropdown-menu-title mb-0">Notifications</h5>
									</div>

									<!--//dropdown-menu-Content-->
									<div class="dropdown-menu-content">

										<!--//Item-2-->
										<div class="item p-3">
											<div class="row gx-2 justify-content-between align-items-center">

												<!--//Item-2 Icon-->
												<div class="col-auto">
													<div class="app-icon-holder icon-holder-mono">
														<svg width="1em" height="1em" viewBox="0 0 16 16"
															class="bi bi-bar-chart-line" fill="currentColor"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd"
																d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
														</svg>
													</div>
												</div>

												<!--//Item-2 Text-->
												<div class="col">
													<div class="info">
														<div class="desc">Your report is ready. Proin venenatis interdum
															est.</div>
														<div class="meta"> 3 days ago</div>
													</div>
												</div>

											</div>

											<!--//Item-2 Redirect to Notification-->
											<a class="link-mask" href="notifications.html"></a>
										</div>

										<!--//Item-3-->
										<div class="item p-3">
											<div class="row gx-2 justify-content-between align-items-center">

												<!--//Item-3 Icon-->
												<div class="col-auto">
													<div class="app-icon-holder icon-holder-mono">
														<svg width="1em" height="1em" viewBox="0 0 16 16"
															class="bi bi-bar-chart-line" fill="currentColor"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd"
																d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
														</svg>
													</div>
												</div>

												<!--//Item-3 Text-->
												<div class="col">
													<div class="info">
														<div class="desc">Your report is ready. Proin venenatis interdum
															est.</div>
														<div class="meta"> 3 days ago</div>
													</div>
												</div>

											</div>

											<!--//Item-3 Redirect to Notification-->
											<a class="link-mask" href="notifications.html"></a>
										</div>

									</div>
									<!--//dropdown-menu-content-->

									<!--//View All Button-->
									<div class="dropdown-menu-footer p-2 text-center">
										<a href="notifications.html">View all</a>
									</div>

								</div>
								<!--//Notification Contents-->

							</div>
							<!--//Notification-->

							<!--//User-->
							<div class="app-utility-item app-user-dropdown dropdown">
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
									role="button" aria-expanded="false"><img src="assets/images/user.png"
										alt="user profile"></a>
								<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
									<li><a class="dropdown-item" href="account.html">Account</a></li>
									<li><a class="dropdown-item" href="settings.html">Settings</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="login.html">Log Out</a></li>
								</ul>
							</div>
							<!--//User-->

						</div>
						<!--//Auto col-->

					</div>
					<!--//auto row-->

				</div>
				<!--//app-header-content-->
			</div>
			<!--//container-fluid-->

		</div>
		<!--//Upper Nav panel-->


		<!--//Side Panel-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">

	

				<!--//Logo-->
				<div class="app-branding">
					<a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg"
							alt="logo"><span class="logo-text">Classmates.</span></a>

				</div>
				<!--//Logo-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">

					<ul class="app-menu list-unstyled accordion" id="menu-accordion">

						<li class="nav-item">

							<a class="nav-link" href="index.html">

								<span class="nav-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z"
											fill="#F4D452" />
										<path
											d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z"
											fill="#F4D452" />
										<path
											d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z"
											fill="#F4D452" />
										<path
											d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z"
											fill="#F4D452" />
									</svg>

								</span>

								<span class="nav-link-text">Shortcuts</span>
							</a>

						</li>
						<!--//Item-Dashboard-->


						<li class="nav-item">

							<a class="nav-link" href="apps.html">
								<span class="nav-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M20.2083 7.81994L12.5083 12.2799C12.1983 12.4599 11.8083 12.4599 11.4883 12.2799L3.78826 7.81994C3.23826 7.49994 3.09826 6.74994 3.51826 6.27994C3.80826 5.94994 4.13826 5.67994 4.48826 5.48994L9.90826 2.48994C11.0683 1.83994 12.9483 1.83994 14.1083 2.48994L19.5283 5.48994C19.8783 5.67994 20.2083 5.95994 20.4983 6.27994C20.8983 6.74994 20.7583 7.49994 20.2083 7.81994Z"
											fill="#ED945A" />
										<path
											d="M11.4305 14.14V20.96C11.4305 21.72 10.6605 22.22 9.98047 21.89C7.92047 20.88 4.45047 18.99 4.45047 18.99C3.23047 18.3 2.23047 16.56 2.23047 15.13V9.97C2.23047 9.18 3.06047 8.68 3.74047 9.07L10.9305 13.24C11.2305 13.43 11.4305 13.77 11.4305 14.14Z"
											fill="#ED945A" />
										<path
											d="M12.5703 14.14V20.96C12.5703 21.72 13.3403 22.22 14.0203 21.89C16.0803 20.88 19.5503 18.99 19.5503 18.99C20.7703 18.3 21.7703 16.56 21.7703 15.13V9.97C21.7703 9.18 20.9403 8.68 20.2603 9.07L13.0703 13.24C12.7703 13.43 12.5703 13.77 12.5703 14.14Z"
											fill="#ED945A" />
									</svg>

								</span>
								<span class="nav-link-text">Resources</span>
							</a>

						</li>
						<!--//Item-Apps-->


						<li class="nav-item">

							<a class="nav-link" href="notifications.html">
								<span class="nav-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19.3419 14.49L18.3419 12.83C18.1319 12.46 17.9419 11.76 17.9419 11.35V8.82C17.9419 6.47 16.5619 4.44 14.5719 3.49C14.0519 2.57 13.0919 2 11.9919 2C10.9019 2 9.9219 2.59 9.4019 3.52C7.4519 4.49 6.1019 6.5 6.1019 8.82V11.35C6.1019 11.76 5.9119 12.46 5.7019 12.82L4.6919 14.49C4.2919 15.16 4.2019 15.9 4.4519 16.58C4.6919 17.25 5.2619 17.77 6.0019 18.02C7.9419 18.68 9.9819 19 12.0219 19C14.0619 19 16.1019 18.68 18.0419 18.03C18.7419 17.8 19.2819 17.27 19.5419 16.58C19.8019 15.89 19.7319 15.13 19.3419 14.49Z"
											fill="#86C0A1" />
										<path
											d="M14.8297 20.01C14.4097 21.17 13.2997 22 11.9997 22C11.2097 22 10.4297 21.68 9.87969 21.11C9.55969 20.81 9.31969 20.41 9.17969 20C9.30969 20.02 9.43969 20.03 9.57969 20.05C9.80969 20.08 10.0497 20.11 10.2897 20.13C10.8597 20.18 11.4397 20.21 12.0197 20.21C12.5897 20.21 13.1597 20.18 13.7197 20.13C13.9297 20.11 14.1397 20.1 14.3397 20.07C14.4997 20.05 14.6597 20.03 14.8297 20.01Z"
											fill="#86C0A1" />
									</svg>

								</span>
								<span class="nav-link-text">Notification</span>
							</a>

						</li>
						<!--//Item-Notification-->

					</ul>
					<!--//app-menu-->
				</nav>
				<!--//app-nav-->


				<div class="app-sidepanel-footer">
					<nav class="app-nav app-nav-footer">
						<ul class="app-menu footer-menu list-unstyled">

							<li class="nav-item">

								<a class="nav-link" href="settings.html">
									<span class="nav-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M18.9381 5.41994L13.7681 2.42994C12.7781 1.85994 11.2281 1.85994 10.2381 2.42994L5.01813 5.43994C2.94813 6.83994 2.82812 7.04994 2.82812 9.27994V14.7099C2.82812 16.9399 2.94813 17.1599 5.05813 18.5799L10.2281 21.5699C10.7281 21.8599 11.3681 21.9999 11.9981 21.9999C12.6281 21.9999 13.2681 21.8599 13.7581 21.5699L18.9781 18.5599C21.0481 17.1599 21.1681 16.9499 21.1681 14.7199V9.27994C21.1681 7.04994 21.0481 6.83994 18.9381 5.41994ZM11.9981 15.2499C10.2081 15.2499 8.74813 13.7899 8.74813 11.9999C8.74813 10.2099 10.2081 8.74994 11.9981 8.74994C13.7881 8.74994 15.2481 10.2099 15.2481 11.9999C15.2481 13.7899 13.7881 15.2499 11.9981 15.2499Z"
												fill="#5A6DED" />
										</svg>

									</span>
									<span class="nav-link-text">Settings</span>
								</a>

							</li>
							<!--//Item-Settings-->

						</ul>
						<!--//footer-menu-->
					</nav>
				</div>
				<!--//app-sidepanel-footer-->
			</div>
			<!--//sidepanel-inner-->
		</div>
		<!--//app-sidepanel-->
	</header>
	<!--//app-header-->

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title">My Account</h1>
				<div class="row gy-4">
					<div class="col-12 col-lg-13">
						<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 2C9.38 2 7.25 4.13 7.25 6.75C7.25 9.32 9.26 11.4 11.88 11.49C11.96 11.48 12.04 11.48 12.1 11.49C12.12 11.49 12.13 11.49 12.15 11.49C12.16 11.49 12.16 11.49 12.17 11.49C14.73 11.4 16.74 9.32 16.75 6.75C16.75 4.13 14.62 2 12 2Z" fill="#292D32"/>
												<path d="M17.08 14.1599C14.29 12.2999 9.73996 12.2999 6.92996 14.1599C5.65996 14.9999 4.95996 16.1499 4.95996 17.3799C4.95996 18.6099 5.65996 19.7499 6.91996 20.5899C8.31996 21.5299 10.16 21.9999 12 21.9999C13.84 21.9999 15.68 21.5299 17.08 20.5899C18.34 19.7399 19.04 18.5999 19.04 17.3599C19.03 16.1399 18.34 14.9899 17.08 14.1599ZM14.33 16.5599L11.81 19.0799C11.69 19.1999 11.53 19.2599 11.37 19.2599C11.21 19.2599 11.05 19.1899 10.93 19.0799L9.66996 17.8199C9.42996 17.5799 9.42996 17.1799 9.66996 16.9399C9.90996 16.6999 10.31 16.6999 10.55 16.9399L11.37 17.7599L13.45 15.6799C13.69 15.4399 14.09 15.4399 14.33 15.6799C14.58 15.9199 14.58 16.3199 14.33 16.5599Z" fill="#292D32"/>
											</svg>
												
										</div>
										<!--//icon-holder-->

									</div>
									<!--//col-->
									<div class="col-auto">
										<h4 class="app-card-title">Profile</h4>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body px-4 w-100">
								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label mb-2"><strong>Photo</strong></div>
											<div class="item-data"><img class="profile-image"
													src="assets/images/user.png" alt=""></div>
										</div>
										<!--//col-->
										<div class="col text-end">
											<a class="btn-sm app-btn-secondary" href="#">Change</a>
										</div>
										<!--//col-->
									</div>
									<!--//row-->
								</div>
								<!--//item-->
								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label"><strong>Name</strong></div>
											<div class="item-data">'$user_name'</div>
										</div>
										<!--//col-->
										<div class="col text-end">
											<a class="btn-sm app-btn-secondary" href="#">Change</a>
										</div>
										<!--//col-->
									</div>
									<!--//row-->
								</div>
								<!--//item-->
								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label"><strong>Email</strong></div>
											<div class="item-data">'$user_email'</div>
										</div>
										<!--//col-->
										<div class="col text-end">
											<a class="btn-sm app-btn-secondary" href="#">Change</a>
										</div>
										<!--//col-->
									</div>
									<!--//row-->
								</div>
								<!--//item-->
								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label"><strong>ID</strong></div>
											<div class="item-data">
												'$user_id'
											</div>
										</div>
										<!--//col-->
										<div class="col text-end">
											<a class="btn-sm app-btn-secondary" href="#">Change</a>
										</div>
										<!--//col-->
									</div>
									<!--//row-->
								</div>
								<!--//item-->
								
							</div>
							<!--//app-card-body-->
							<div class="app-card-footer p-4 mt-auto">
								<button type="submit" class="btn app-btn-primary">Save Changes</button>
							</div>
							
							<!--//app-card-footer-->

						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					
					<div class="col-12 col-lg-13">
						<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder">
											<svg width="42" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.91 11.1201V6.73007C20.91 5.91007 20.29 4.98007 19.52 4.67007L13.95 2.39007C12.7 1.88007 11.29 1.88007 10.04 2.39007L4.46997 4.67007C3.70997 4.98007 3.08997 5.91007 3.08997 6.73007V11.1201C3.08997 16.0101 6.63997 20.5901 11.49 21.9301C11.82 22.0201 12.18 22.0201 12.51 21.9301C17.36 20.5901 20.91 16.0101 20.91 11.1201ZM12.75 12.8701V15.5001C12.75 15.9101 12.41 16.2501 12 16.2501C11.59 16.2501 11.25 15.9101 11.25 15.5001V12.8701C10.24 12.5501 9.49997 11.6101 9.49997 10.5001C9.49997 9.12007 10.62 8.00007 12 8.00007C13.38 8.00007 14.5 9.12007 14.5 10.5001C14.5 11.6201 13.76 12.5501 12.75 12.8701Z" fill="#292D32"/>
											</svg>
												
												
										</div>
										<!--//icon-holder-->

									</div>
									<!--//col-->
									<div class="col-auto">
										<h4 class="app-card-title">Security</h4>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body px-4 w-100">

								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label"><strong>Password</strong></div>
											<div class="item-data">••••••••</div>
										</div>
										<!--//col-->
										<div class="col text-end">
											<a class="btn-sm app-btn-secondary" href="#">Change</a>
										</div>
										<!--//col-->
									</div>
									<!--//row-->
								</div>
								<!--//item-->
								<div class="item border-bottom py-3">
									<div class="row justify-content-between align-items-center">
										<div class="col-auto">
											<div class="item-label"><strong> New Password</strong></div>
											<div class="item-data">••••••••</div>
										</div>
										<!--//col-->
									
									</div>
									<!--//row-->
								</div>
								<!--//item-->
							</div>
							<!--//app-card-body-->

							<div class="app-card-footer p-4 mt-auto">
								<button type="submit" class="btn app-btn-primary">Save Changes</button>
							</div>
							<!--//app-card-footer-->

						</div>
						<!--//app-card-->
					</div>
					
				</div>
				<!--//row-->

			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->


	</div>
	<!--//app-wrapper-->


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>