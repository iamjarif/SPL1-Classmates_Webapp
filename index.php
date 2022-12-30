<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home - Classmates</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon" />
  </head>

  <body class="app">
    <header class="app-header fixed-top">
      <!--//Upper Nav panel-->
      <div class="app-header-inner">
        <div class="container-fluid py-2">
          <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="app-utilities col-auto">
                

                <!--//User-->
                <div class="app-utility-item app-user-dropdown dropdown">
                  <a
                    class="dropdown-toggle"
                    id="user-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    ><img src="assets/images/user.png" alt="user profile"
                  /></a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="user-dropdown-toggle"
                  >
                    <li>
                      <a class="dropdown-item" href="account.front.php"
                        >Account</a
                      >
                    </li>

                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">Log Out</a>
                    </li>
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
            <a class="app-logo" href="index.php"
              ><img
                class="logo-icon me-2"
                src="assets/images/app-logo.svg"
                alt="logo"
              /><span class="logo-text">Classmates.</span></a
            >
          </div>
          <!--//Logo-->

          <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <span class="nav-icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z"
                        fill="#F4D452"
                      />
                    </svg>
                  </span>

                  <span class="nav-link-text">Shortcuts</span>
                </a>
              </li>
              <!--//Item-Dashboard-->

              <li class="nav-item">
                <a class="nav-link" href="apps.html">
                  <span class="nav-icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M20.2083 7.81994L12.5083 12.2799C12.1983 12.4599 11.8083 12.4599 11.4883 12.2799L3.78826 7.81994C3.23826 7.49994 3.09826 6.74994 3.51826 6.27994C3.80826 5.94994 4.13826 5.67994 4.48826 5.48994L9.90826 2.48994C11.0683 1.83994 12.9483 1.83994 14.1083 2.48994L19.5283 5.48994C19.8783 5.67994 20.2083 5.95994 20.4983 6.27994C20.8983 6.74994 20.7583 7.49994 20.2083 7.81994Z"
                        fill="#ED945A"
                      />
                      <path
                        d="M11.4305 14.14V20.96C11.4305 21.72 10.6605 22.22 9.98047 21.89C7.92047 20.88 4.45047 18.99 4.45047 18.99C3.23047 18.3 2.23047 16.56 2.23047 15.13V9.97C2.23047 9.18 3.06047 8.68 3.74047 9.07L10.9305 13.24C11.2305 13.43 11.4305 13.77 11.4305 14.14Z"
                        fill="#ED945A"
                      />
                      <path
                        d="M12.5703 14.14V20.96C12.5703 21.72 13.3403 22.22 14.0203 21.89C16.0803 20.88 19.5503 18.99 19.5503 18.99C20.7703 18.3 21.7703 16.56 21.7703 15.13V9.97C21.7703 9.18 20.9403 8.68 20.2603 9.07L13.0703 13.24C12.7703 13.43 12.5703 13.77 12.5703 14.14Z"
                        fill="#ED945A"
                      />
                    </svg>
                  </span>
                  <span class="nav-link-text">Resources</span>
                </a>
              </li>
              <!--//Item-Apps-->

              <li class="nav-item">

                <a class="nav-link" href="chat.html">
                  <span class="nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M18.4699 16.83L18.8599 19.99C18.9599 20.82 18.0699 21.4 17.3599 20.97L13.8999 18.91C13.6599 18.77 13.5999 18.47 13.7299 18.23C14.2299 17.31 14.4999 16.27 14.4999 15.23C14.4999 11.57 11.3599 8.59 7.49989 8.59C6.70989 8.59 5.93989 8.71 5.21989 8.95C4.84989 9.07 4.48989 8.73 4.57989 8.35C5.48989 4.71 8.98989 2 13.1699 2C18.0499 2 21.9999 5.69 21.9999 10.24C21.9999 12.94 20.6099 15.33 18.4699 16.83Z" fill="#3BB0C1"/>
                                          <path d="M13 15.2301C13 16.4201 12.56 17.5201 11.82 18.3901C10.83 19.5901 9.26 20.3601 7.5 20.3601L4.89 21.9101C4.45 22.1801 3.89 21.8101 3.95 21.3001L4.2 19.3301C2.86 18.4001 2 16.9101 2 15.2301C2 13.4701 2.94 11.9201 4.38 11.0001C5.27 10.4201 6.34 10.0901 7.5 10.0901C10.54 10.0901 13 12.3901 13 15.2301Z" fill="#3BB0C1"/>
                                      </svg>
                      
                  </span>
                  <span class="nav-link-text">Group Discussion</span>
                </a>
  
              </li>
              <!--//Item-Apps-->

              
            </ul>
            <!--//app-menu-->
          </nav>
          <!--//app-nav-->

          <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
              <ul class="app-menu footer-menu list-unstyled">
                <li class="nav-item">
                  <a class="nav-link" href="account.front.php">
                    <span class="nav-icon">
                      <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M22 12C22 6.49 17.51 2 12 2C6.49 2 2 6.49 2 12C2 14.9 3.25 17.51 5.23 19.34C5.23 19.35 5.23 19.35 5.22 19.36C5.32 19.46 5.44 19.54 5.54 19.63C5.6 19.68 5.65 19.73 5.71 19.77C5.89 19.92 6.09 20.06 6.28 20.2C6.35 20.25 6.41 20.29 6.48 20.34C6.67 20.47 6.87 20.59 7.08 20.7C7.15 20.74 7.23 20.79 7.3 20.83C7.5 20.94 7.71 21.04 7.93 21.13C8.01 21.17 8.09 21.21 8.17 21.24C8.39 21.33 8.61 21.41 8.83 21.48C8.91 21.51 8.99 21.54 9.07 21.56C9.31 21.63 9.55 21.69 9.79 21.75C9.86 21.77 9.93 21.79 10.01 21.8C10.29 21.86 10.57 21.9 10.86 21.93C10.9 21.93 10.94 21.94 10.98 21.95C11.32 21.98 11.66 22 12 22C12.34 22 12.68 21.98 13.01 21.95C13.05 21.95 13.09 21.94 13.13 21.93C13.42 21.9 13.7 21.86 13.98 21.8C14.05 21.79 14.12 21.76 14.2 21.75C14.44 21.69 14.69 21.64 14.92 21.56C15 21.53 15.08 21.5 15.16 21.48C15.38 21.4 15.61 21.33 15.82 21.24C15.9 21.21 15.98 21.17 16.06 21.13C16.27 21.04 16.48 20.94 16.69 20.83C16.77 20.79 16.84 20.74 16.91 20.7C17.11 20.58 17.31 20.47 17.51 20.34C17.58 20.3 17.64 20.25 17.71 20.2C17.91 20.06 18.1 19.92 18.28 19.77C18.34 19.72 18.39 19.67 18.45 19.63C18.56 19.54 18.67 19.45 18.77 19.36C18.77 19.35 18.77 19.35 18.76 19.34C20.75 17.51 22 14.9 22 12ZM16.94 16.97C14.23 15.15 9.79 15.15 7.06 16.97C6.62 17.26 6.26 17.6 5.96 17.97C4.44 16.43 3.5 14.32 3.5 12C3.5 7.31 7.31 3.5 12 3.5C16.69 3.5 20.5 7.31 20.5 12C20.5 14.32 19.56 16.43 18.04 17.97C17.75 17.6 17.38 17.26 16.94 16.97Z"
                          fill="#5AED83"
                        />
                        <path
                          d="M12 6.92993C9.93 6.92993 8.25 8.60993 8.25 10.6799C8.25 12.7099 9.84 14.3599 11.95 14.4199C11.98 14.4199 12.02 14.4199 12.04 14.4199C12.06 14.4199 12.09 14.4199 12.11 14.4199C12.12 14.4199 12.13 14.4199 12.13 14.4199C14.15 14.3499 15.74 12.7099 15.75 10.6799C15.75 8.60993 14.07 6.92993 12 6.92993Z"
                          fill="#5AED83"
                        />
                      </svg>
                    </span>
                    <span class="nav-link-text">Account</span>
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
          <h1 class="app-page-title"><a3>Welcome back,</a3> <a2>Students!</a2></h1>

          <div class="row g-4 mb-4">
          <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="classRoutine.html" class="app-card-title"
                        >Class Routine</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <img
                    class="image"
                    src="assets/images/Class Routine/Routine.jpg"
                    alt="HTML5 Icon"
                    style="width: 580px; height: 410px"
                  />
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home - Classmates</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon" />
  </head>

  <body class="app">
    <header class="app-header fixed-top">
      <!--//Upper Nav panel-->
      <div class="app-header-inner">
        <div class="container-fluid py-2">
          <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="app-utilities col-auto">
                

                <!--//User-->
                <div class="app-utility-item app-user-dropdown dropdown">
                  <a
                    class="dropdown-toggle"
                    id="user-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    ><img src="assets/images/user.png" alt="user profile"
                  /></a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="user-dropdown-toggle"
                  >
                    <li>
                      <a class="dropdown-item" href="account.front.php"
                        >Account</a
                      >
                    </li>

                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">Log Out</a>
                    </li>
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
            <a class="app-logo" href="index.php"
              ><img
                class="logo-icon me-2"
                src="assets/images/app-logo.svg"
                alt="logo"
              /><span class="logo-text">Classmates.</span></a
            >
          </div>
          <!--//Logo-->

          <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <span class="nav-icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z"
                        fill="#F4D452"
                      />
                      <path
                        d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z"
                        fill="#F4D452"
                      />
                    </svg>
                  </span>

                  <span class="nav-link-text">Shortcuts</span>
                </a>
              </li>
              <!--//Item-Dashboard-->

              <li class="nav-item">
                <a class="nav-link" href="apps.html">
                  <span class="nav-icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M20.2083 7.81994L12.5083 12.2799C12.1983 12.4599 11.8083 12.4599 11.4883 12.2799L3.78826 7.81994C3.23826 7.49994 3.09826 6.74994 3.51826 6.27994C3.80826 5.94994 4.13826 5.67994 4.48826 5.48994L9.90826 2.48994C11.0683 1.83994 12.9483 1.83994 14.1083 2.48994L19.5283 5.48994C19.8783 5.67994 20.2083 5.95994 20.4983 6.27994C20.8983 6.74994 20.7583 7.49994 20.2083 7.81994Z"
                        fill="#ED945A"
                      />
                      <path
                        d="M11.4305 14.14V20.96C11.4305 21.72 10.6605 22.22 9.98047 21.89C7.92047 20.88 4.45047 18.99 4.45047 18.99C3.23047 18.3 2.23047 16.56 2.23047 15.13V9.97C2.23047 9.18 3.06047 8.68 3.74047 9.07L10.9305 13.24C11.2305 13.43 11.4305 13.77 11.4305 14.14Z"
                        fill="#ED945A"
                      />
                      <path
                        d="M12.5703 14.14V20.96C12.5703 21.72 13.3403 22.22 14.0203 21.89C16.0803 20.88 19.5503 18.99 19.5503 18.99C20.7703 18.3 21.7703 16.56 21.7703 15.13V9.97C21.7703 9.18 20.9403 8.68 20.2603 9.07L13.0703 13.24C12.7703 13.43 12.5703 13.77 12.5703 14.14Z"
                        fill="#ED945A"
                      />
                    </svg>
                  </span>
                  <span class="nav-link-text">Resources</span>
                </a>
              </li>
              <!--//Item-Apps-->

              <li class="nav-item">

                <a class="nav-link" href="chat.html">
                  <span class="nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M18.4699 16.83L18.8599 19.99C18.9599 20.82 18.0699 21.4 17.3599 20.97L13.8999 18.91C13.6599 18.77 13.5999 18.47 13.7299 18.23C14.2299 17.31 14.4999 16.27 14.4999 15.23C14.4999 11.57 11.3599 8.59 7.49989 8.59C6.70989 8.59 5.93989 8.71 5.21989 8.95C4.84989 9.07 4.48989 8.73 4.57989 8.35C5.48989 4.71 8.98989 2 13.1699 2C18.0499 2 21.9999 5.69 21.9999 10.24C21.9999 12.94 20.6099 15.33 18.4699 16.83Z" fill="#3BB0C1"/>
                                          <path d="M13 15.2301C13 16.4201 12.56 17.5201 11.82 18.3901C10.83 19.5901 9.26 20.3601 7.5 20.3601L4.89 21.9101C4.45 22.1801 3.89 21.8101 3.95 21.3001L4.2 19.3301C2.86 18.4001 2 16.9101 2 15.2301C2 13.4701 2.94 11.9201 4.38 11.0001C5.27 10.4201 6.34 10.0901 7.5 10.0901C10.54 10.0901 13 12.3901 13 15.2301Z" fill="#3BB0C1"/>
                                      </svg>
                      
                  </span>
                  <span class="nav-link-text">Group Discussion</span>
                </a>
  
              </li>
              <!--//Item-Apps-->

              
            </ul>
            <!--//app-menu-->
          </nav>
          <!--//app-nav-->

          <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
              <ul class="app-menu footer-menu list-unstyled">
                <li class="nav-item">
                  <a class="nav-link" href="account.front.php">
                    <span class="nav-icon">
                      <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M22 12C22 6.49 17.51 2 12 2C6.49 2 2 6.49 2 12C2 14.9 3.25 17.51 5.23 19.34C5.23 19.35 5.23 19.35 5.22 19.36C5.32 19.46 5.44 19.54 5.54 19.63C5.6 19.68 5.65 19.73 5.71 19.77C5.89 19.92 6.09 20.06 6.28 20.2C6.35 20.25 6.41 20.29 6.48 20.34C6.67 20.47 6.87 20.59 7.08 20.7C7.15 20.74 7.23 20.79 7.3 20.83C7.5 20.94 7.71 21.04 7.93 21.13C8.01 21.17 8.09 21.21 8.17 21.24C8.39 21.33 8.61 21.41 8.83 21.48C8.91 21.51 8.99 21.54 9.07 21.56C9.31 21.63 9.55 21.69 9.79 21.75C9.86 21.77 9.93 21.79 10.01 21.8C10.29 21.86 10.57 21.9 10.86 21.93C10.9 21.93 10.94 21.94 10.98 21.95C11.32 21.98 11.66 22 12 22C12.34 22 12.68 21.98 13.01 21.95C13.05 21.95 13.09 21.94 13.13 21.93C13.42 21.9 13.7 21.86 13.98 21.8C14.05 21.79 14.12 21.76 14.2 21.75C14.44 21.69 14.69 21.64 14.92 21.56C15 21.53 15.08 21.5 15.16 21.48C15.38 21.4 15.61 21.33 15.82 21.24C15.9 21.21 15.98 21.17 16.06 21.13C16.27 21.04 16.48 20.94 16.69 20.83C16.77 20.79 16.84 20.74 16.91 20.7C17.11 20.58 17.31 20.47 17.51 20.34C17.58 20.3 17.64 20.25 17.71 20.2C17.91 20.06 18.1 19.92 18.28 19.77C18.34 19.72 18.39 19.67 18.45 19.63C18.56 19.54 18.67 19.45 18.77 19.36C18.77 19.35 18.77 19.35 18.76 19.34C20.75 17.51 22 14.9 22 12ZM16.94 16.97C14.23 15.15 9.79 15.15 7.06 16.97C6.62 17.26 6.26 17.6 5.96 17.97C4.44 16.43 3.5 14.32 3.5 12C3.5 7.31 7.31 3.5 12 3.5C16.69 3.5 20.5 7.31 20.5 12C20.5 14.32 19.56 16.43 18.04 17.97C17.75 17.6 17.38 17.26 16.94 16.97Z"
                          fill="#5AED83"
                        />
                        <path
                          d="M12 6.92993C9.93 6.92993 8.25 8.60993 8.25 10.6799C8.25 12.7099 9.84 14.3599 11.95 14.4199C11.98 14.4199 12.02 14.4199 12.04 14.4199C12.06 14.4199 12.09 14.4199 12.11 14.4199C12.12 14.4199 12.13 14.4199 12.13 14.4199C14.15 14.3499 15.74 12.7099 15.75 10.6799C15.75 8.60993 14.07 6.92993 12 6.92993Z"
                          fill="#5AED83"
                        />
                      </svg>
                    </span>
                    <span class="nav-link-text">Account</span>
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
          <h1 class="app-page-title"><a3>Welcome back,</a3> <a2>Students!</a2></h1>

          <div class="row g-4 mb-4">
            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="noticeBoard.php" class="app-card-title"
                        >Recent Notices</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <div
                    class="app-cardNoticeShortcut app-card-notification shadow-sm mb-8"
                  >
                    <div class="app-card-header px-4 py-3">
                      <div class="row g-3 align-items-center">
                        <div
                          class="col-12 col-lg-auto text-center text-lg-start"
                        >
                          <h4 class="notification-title mb-1">
                            Tomorrow no class! cheers!
                          </h4>

                          <ul class="notification-meta list-inline mb-0">
                            <li class="list-inline-item">10 mins ago</li>
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item">Lomatul Mahzabin</li>
                          </ul>
                        </div>
                       

                        <div class="notification-content">
                          All the classes has been cancelled because of picnic!
                        </div>
                      </div>
                      
                    </div>
                   
                  </div>
                 

                  <div
                    class="app-cardNoticeShortcut app-card-notification shadow-sm mb-8"
                  >
                    <div class="app-card-header px-4 py-3">
                      <div class="row g-3 align-items-center">
                        <div
                          class="col-12 col-lg-auto text-center text-lg-start"
                        >
                          <h4 class="notification-title mb-1">
                            Class cancelled
                          </h4>

                          <ul class="notification-meta list-inline mb-0">
                            <li class="list-inline-item">2 days ago</li>
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item">Lomatul Mahzabin</li>
                          </ul>
                        </div>
                        <!--//col-->

                        <div class="notification-content">Pardyyyyy!</div>
                      </div>
                      <!--//row-->
                    </div>
                    <!--//app-card-header-->
                  </div>
                  <!--//app-card-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="booksfrontend.php" class="app-card-title"
                        >Recently Added Books</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <div class="tab-content" id="orders-table-tab-content">
                    <div
                      class="tab-pane fade show active"
                      id="orders-all"
                      role="tabpanel"
                      aria-labelledby="orders-all-tab"
                    >
                      <div
                        class="app-card app-card-orders-table shadow-sm mb-4"
                      >
                        <div class="app-card-body">
                          <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                              <thead>
                                <tr>
                                  <th class="cell">Course Name</th>
                                  <th class="cell">Book Name</th>
                                  <th class="cell">Id</th>
                                  <th class="cell">View</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                <?php

                                                 include("connection.php");
                                                 $booklistquery="select * from books order by uploadtime desc";
                                                 $bookdata=mysqli_query($conn,$booklistquery);
                                                 $totalrows=mysqli_num_rows($bookdata);

                                                $count=0;
                                                 if($totalrows>0)
                                                 {
                                                    while( $result=mysqli_fetch_assoc($bookdata))
                                                    {
                                                      $count++;
                                                       if($count<4)
                                                       {
                                                        echo'<meta http-equiv="X-UA-Compatible" content="IE=edge">';
                                                        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
                                                        echo'<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>';
                                                        echo'<link rel="stylesheet" href="assets/css/styles.css">';
                                                        echo'<link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon">';
                                                        echo"<tr>";

                                                        echo"<td>";
                                                        echo $result['cname'];
                                                        echo"</td>";

                                                        echo"<td>";
                                                        echo $result['bname'];
                                                        echo"</td>";

                                                        echo"<td>";
                                                        echo $result['SId'];
                                                        echo"</td>";

                                                
                                                      echo'<td class="cell">';
                                                      echo'<a class="btn-sm app-btn-extra"';
                                                      echo" href=";
                                                      echo $result['bookurl'];
                                                      echo">";
                                                      echo "Open</a>";
                                                      echo'</td>';

                                           


                                                       echo"</tr>";

                                                       }

                                                        
                                                         
                                                        
                                                    }
                                                 } 



                                   ?> 

                               
                              </tbody>
                            </table>
                          </div>
                          <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                      </div>
                      <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                  </div>
                  <!--//tab-content-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->

          <div class="row g-4 mb-4">
            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="classRoutine.html" class="app-card-title"
                        >Class Routine</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <img
                    class="image"
                    src="assets/images/Class Routine/Routine.jpg"
                    alt="HTML5 Icon"
                    style="width: 580px; height: 410px"
                  />
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="questionBankfrontend.php" class="app-card-title"
                        >Recently Added Questions</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <div class="tab-content" id="orders-table-tab-content">
                    <div
                      class="tab-pane fade show active"
                      id="orders-all"
                      role="tabpanel"
                      aria-labelledby="orders-all-tab"
                    >
                      <div
                        class="app-card app-card-orders-table shadow-sm mb-4"
                      >
                        <div class="app-card-body">
                          <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                              <thead>
                                <tr>
                                  <th class="cell">Year</th>
                                  <th class="cell">Course Name</th>
                                  <th class="cell">Exam Name</th>
                                 
                                  <th class="cell">View</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                <?php
                                                 include("connection.php");
                                                 $queslistquery="select * from questionbank order by quesuploadtime desc ";
                                                 $quesdata=mysqli_query($conn,$queslistquery);
                                                 $totalrows=mysqli_num_rows($quesdata);

                                                
                                                 if($totalrows>0 )
                                                 {
                                                   $quescount=0;
                                                    while( $result=mysqli_fetch_assoc($quesdata))
                                                    {
                                                     $quescount++;
                                                     if($quescount<4)
                                                     {
                                                      echo'<meta http-equiv="X-UA-Compatible" content="IE=edge">';
                                                      echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
                                                      echo'<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>';
                                                      echo'<link rel="stylesheet" href="assets/css/styles.css">';
                                                      echo'<link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon">';
                                                      echo"<tr>";


                                                      echo"<td>";
                                                      echo $result['year'];
                                                      echo"</td>";

                                                      echo"<td>";
                                                      echo $result['cname'];
                                                      echo"</td>";

                                                      echo"<td>";
                                                      echo $result['ExamName'];
                                                      echo"</td>";

                                                     

                                              
                                                    echo'<td class="cell">';
                                                    echo'<a class="btn-sm app-btn-extra"';
                                                    echo" href=";
                                                    echo $result['qlink'];
                                                    echo">";
                                                    echo "Open</a>";
                                                    echo'</td>';

                                         


                                                     echo"</tr>";

                                                       
                                                     }
                                 

                                                       
                                                        
                                                    }
                                                 } 



                                                ?>


                                                         
                                                        
                                                  
                              </tbody>
                            </table>
                          </div>
                          <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                      </div>
                      <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                  </div>
                  <!--//tab-content-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-content-->

      <footer class="app-footer">
        <div class="container text-center py-3"></div>
      </footer>
      <!--//app-footer-->
    </div>
    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

            <!--//col-->

            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="booksfrontend.php" class="app-card-title"
                        >Recently Added Books</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <div class="tab-content" id="orders-table-tab-content">
                    <div
                      class="tab-pane fade show active"
                      id="orders-all"
                      role="tabpanel"
                      aria-labelledby="orders-all-tab"
                    >
                      <div
                        class="app-card app-card-orders-table shadow-sm mb-4"
                      >
                        <div class="app-card-body">
                          <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                              <thead>
                                <tr>
                                  <th class="cell">Course Name</th>
                                  <th class="cell">Book Name</th>
                                  <th class="cell">Id</th>
                                  <th class="cell">View</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                <?php

                                                 include("connection.php");
                                                 $booklistquery="select * from books order by uploadtime desc";
                                                 $bookdata=mysqli_query($conn,$booklistquery);
                                                 $totalrows=mysqli_num_rows($bookdata);

                                                $count=0;
                                                 if($totalrows>0)
                                                 {
                                                    while( $result=mysqli_fetch_assoc($bookdata))
                                                    {
                                                      $count++;
                                                       if($count<4)
                                                       {
                                                        echo'<meta http-equiv="X-UA-Compatible" content="IE=edge">';
                                                        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
                                                        echo'<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>';
                                                        echo'<link rel="stylesheet" href="assets/css/styles.css">';
                                                        echo'<link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon">';
                                                        echo"<tr>";

                                                        echo"<td>";
                                                        echo $result['cname'];
                                                        echo"</td>";

                                                        echo"<td>";
                                                        echo $result['bname'];
                                                        echo"</td>";

                                                        echo"<td>";
                                                        echo $result['SId'];
                                                        echo"</td>";

                                                
                                                      echo'<td class="cell">';
                                                      echo'<a class="btn-sm app-btn-extra"';
                                                      echo" href=";
                                                      echo $result['bookurl'];
                                                      echo">";
                                                      echo "Open</a>";
                                                      echo'</td>';

                                           


                                                       echo"</tr>";

                                                       }

                                                        
                                                         
                                                        
                                                    }
                                                 } 



                                   ?> 

                               
                              </tbody>
                            </table>
                          </div>
                          <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                      </div>
                      <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                  </div>
                  <!--//tab-content-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->

          <div class="row g-4 mb-4">
            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="classRoutine.html" class="app-card-title"
                        >Class Routine</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <img
                    class="image"
                    src="assets/images/Class Routine/Routine.jpg"
                    alt="HTML5 Icon"
                    style="width: 580px; height: 410px"
                  />
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-12 col-lg-13">
              <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-6">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <a href="questionBankfrontend.php" class="app-card-title"
                        >Recently Added Questions</a
                      >
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->

                <div class="app-card-body p-3 p-lg-6">
                  <div class="tab-content" id="orders-table-tab-content">
                    <div
                      class="tab-pane fade show active"
                      id="orders-all"
                      role="tabpanel"
                      aria-labelledby="orders-all-tab"
                    >
                      <div
                        class="app-card app-card-orders-table shadow-sm mb-4"
                      >
                        <div class="app-card-body">
                          <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                              <thead>
                                <tr>
                                  <th class="cell">Year</th>
                                  <th class="cell">Course Name</th>
                                  <th class="cell">Exam Name</th>
                                 
                                  <th class="cell">View</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                <?php
                                                 include("connection.php");
                                                 $queslistquery="select * from questionbank order by quesuploadtime desc ";
                                                 $quesdata=mysqli_query($conn,$queslistquery);
                                                 $totalrows=mysqli_num_rows($quesdata);

                                                
                                                 if($totalrows>0 )
                                                 {
                                                   $quescount=0;
                                                    while( $result=mysqli_fetch_assoc($quesdata))
                                                    {
                                                     $quescount++;
                                                     if($quescount<4)
                                                     {
                                                      echo'<meta http-equiv="X-UA-Compatible" content="IE=edge">';
                                                      echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
                                                      echo'<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>';
                                                      echo'<link rel="stylesheet" href="assets/css/styles.css">';
                                                      echo'<link rel="icon" href="assets/images/app-logo.svg" type="image/x-icon">';
                                                      echo"<tr>";


                                                      echo"<td>";
                                                      echo $result['year'];
                                                      echo"</td>";

                                                      echo"<td>";
                                                      echo $result['cname'];
                                                      echo"</td>";

                                                      echo"<td>";
                                                      echo $result['ExamName'];
                                                      echo"</td>";

                                                     

                                              
                                                    echo'<td class="cell">';
                                                    echo'<a class="btn-sm app-btn-extra"';
                                                    echo" href=";
                                                    echo $result['qlink'];
                                                    echo">";
                                                    echo "Open</a>";
                                                    echo'</td>';

                                         


                                                     echo"</tr>";

                                                       
                                                     }
                                 

                                                       
                                                        
                                                    }
                                                 } 



                                                ?>


                                                         
                                                        
                                                  
                              </tbody>
                            </table>
                          </div>
                          <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                      </div>
                      <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                  </div>
                  <!--//tab-content-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-content-->

      <footer class="app-footer">
        <div class="container text-center py-3"></div>
      </footer>
      <!--//app-footer-->
    </div>
    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
