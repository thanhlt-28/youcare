 <!-- ======= Sidebar ======= -->

 <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
         <a class="nav-link " href="{{('/admin')}}">
             <i class="bi bi-grid"></i>
             <span>Dashboard</span>
         </a>
     </li><!-- End Dashboard Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-menu-button-wide"></i><span>Danh mục bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             <li>
                 <a href="{{route('cate_post.index')}}">
                     <i class="bi bi-circle"></i><span>All danh mục</span>
                 </a>
             </li>
             <li>
                 <a href="{{route('cate_post.index')}}">
                     <i class="bi bi-circle"></i><span>Thêm danh mục</span>
                 </a>
             </li>
         </ul>
     </li><!-- End Components Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-journal-text"></i><span>Bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             <li>
                 <a href="{{route('posts.index')}}">
                     <i class="bi bi-circle"></i><span>All bài viết</span>
                 </a>
             </li>
         </ul>
     </li><!-- End Forms Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             <li>
                 <a href="tables-general.html">
                     <i class="bi bi-circle"></i><span>General Tables</span>
                 </a>
             </li>
             <li>
                 <a href="tables-data.html">
                     <i class="bi bi-circle"></i><span>Data Tables</span>
                 </a>
             </li>
         </ul>
     </li><!-- End Tables Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" href="{{route('users.index')}}">
             <i class="bi bi-person-lines-fill"></i><span>Users</span>
         </a>
     </li><!-- End Charts Nav -->
     

     <li class="nav-item">
         <a class="nav-link collapsed" href="#">
             <i class="bi bi-gem"></i><span>Icons</span>
         </a>
     </li><!-- End Icons Nav -->

     <li class="nav-heading">Pages</li>

     <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="users-profile.html">
             <i class="bi bi-person"></i>
             <span>Profile</span>
         </a>
     </li> -->
     <!-- End Profile Page Nav -->

     <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="pages-contact.html">
             <i class="bi bi-envelope"></i>
             <span>Contact</span>
         </a>
     </li> -->
     <!-- End Contact Page Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" href="pages-register.html">
             <i class="bi bi-card-list"></i>
             <span>Register</span>
         </a>
     </li>
     <!-- End Register Page Nav -->

     <li class="nav-item">
         <a class="nav-link collapsed" href="pages-login.html">
             <i class="bi bi-box-arrow-in-right"></i>
             <span>Login</span>
         </a>
     </li>
     <!-- End Login Page Nav -->

     <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="pages-error-404.html">
             <i class="bi bi-dash-circle"></i>
             <span>Error 404</span>
         </a>
     </li> -->
     <!-- End Error 404 Page Nav -->

     <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="pages-blank.html">
             <i class="bi bi-file-earmark"></i>
             <span>Blank</span>
         </a>
     </li> -->
     <!-- End Blank Page Nav -->

 </ul>