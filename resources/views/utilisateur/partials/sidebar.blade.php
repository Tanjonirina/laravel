<!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scrollDiv" style="position: relative; overflow: hidden; width: auto;height:100% ">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>

                <li>
                    <a href="{{route('employer')}}" aria-expanded="false">
                        <i class="icon-c"  ></i><span class="nav-text">Acceuil</span>
                    </a>
                </li>



                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-user menu-icon"></i><span class="nav-text">pointage</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="icon-list" href="{{route('pointage.liste')}}"> liste</a></li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                    <ul aria-expanded="false">
                        <li><a class="icon-plus" href=""> ajouter</a></li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-plus menu-icon"></i><span class="nav-text">Congé</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="icon-list" href=""> liste</a></li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>

                </li>

                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-user menu-icon"></i><span class="nav-text">Profil</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="icon-list" href=""> liste</a></li>

                    </ul>

                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
