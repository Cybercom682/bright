{block name="bright-admin-header-content"}
    <header class="container-fluid">
        <div class="row">
            <div id="logo" class="col-2 border-end d-flex justify-content-center bg-dark">
                <img src="{$templatePath}/assets/media/logo.png" height="100" width="150" style="filter: invert();">
                <span class="my-auto text-white"><strong>Administration</strong></span>
            </div>
            <div class="col-7 border-bottom d-flex">
                <nav class="navbar w-100">
                    <div class="container-fluid">
                        <form class="d-flex w-50" role="search">
                            <input class="form-control me-2 py-0 rounded-0" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-sm btn-outline-dark rounded-0 border-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-3 border-bottom d-flex">
                <ul class="nav justify-content-end w-100 my-auto">
                    <li class="nav-item px-2">
                        <div id="notifys" class="dropdown">
                            <a class="btn btn-sm btn-outline-dark border-0 rounded-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-message"></i>
                                Notify
                            </a>
                            <ul class="dropdown-menu rounded-0 p-0" style="width: 300px;">
                                <li>
                                    {include file="../areas/config/notify.tpl"}
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn-sm btn-outline-dark border-0 rounded-0" onclick="window.open('../')" aria-current="page" href="#">
                            <i class="fa-solid fa-pager"></i>
                            Frontend
                        </a>
                    </li>
                    <li class="nav-item ps-2 pe-3">
                        <a class="btn btn-sm btn-outline-dark border-0 rounded-0" aria-current="page" href="#">
                            <i class="fa-regular fa-user"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
{/block}