<!-- Navigation start -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar" aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
    </button>
    <div class="collapse navbar-collapse" id="royalHospitalsNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active-page" href="{{ route('admin.dashboard') }}">
                    <i class="icon-devices_other nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-users nav-icon"></i>
                    Patients
                </a>
                <ul class="dropdown-menu" aria-labelledby="doctoRs">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.patient.index') }}">Patients</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.patient.create') }}">Add Patient</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-book-open nav-icon"></i>
                    Diagnoses
                </a>
                <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.diagnose.index') }}">Diagnoses</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-edit1 nav-icon"></i>
                    Forms
                </a>
                <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                    <li>
                        <a class="dropdown-item" href="datepickers.html">Datepickers</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="wizard.html">Wizards</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="bs-select.html">BS Select</a>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="customDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Custom Forms
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <li>
                                <a class="dropdown-item" href="contact.html">Contact Form</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contact2.html">Contact Form #2</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contact3.html">Contact Form #3</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contact4.html">Contact Form #4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-item" href="form-inputs.html">Form Inputs</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="check-radio.html">Check Boxes</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="range-sliders.html">Range Sliders</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="editor.html">Editor</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-image nav-icon"></i>
                    UI Elements
                </a>
                <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Buttons
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                            <li>
                                <a class="dropdown-item" href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="button-groups.html">Button Groups</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dropdowns.html">Dropdowns</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="navsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Navbars
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navsDropdown">
                            <li>
                                <a class="dropdown-item" href="nav.html">Nav</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="navbars.html">Navbars</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="tabs.html">Tabs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="componentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Components
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="componentsDropdown">
                            <li>
                                <a class="dropdown-item" href="breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="jumbotron.html">Jumbotron</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="labels-badges.html">Labels &amp; Badges</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="list-items.html">List Items</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pagination.html">Paginations</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="progress.html">Progress Bars</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pills.html">Pills</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="spinners.html">Spinners</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="gridDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Grid
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="gridDropdown">
                            <li>
                                <a class="dropdown-item" href="grid.html">Grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="grid-doc.html">Grid Doc</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="imagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Images
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="imagesDropdown">
                            <li>
                                <a class="dropdown-item" href="avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="media-objects.html">Media Objects</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="images.html">Thumbnails</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="text-avatars.html">Text Avatars</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="alertDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notifications
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="alertDropdown">
                            <li>
                                <a class="dropdown-item" href="bootstrap-alerts.html">Default Alerts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="custom-alerts.html">Custom Alerts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="toasts.html">Toasts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle sub-nav-link" href="#" id="bsJquery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bootstrap jQuery
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="bsJquery">
                            <li>
                                <a class="dropdown-item" href="carousel.html">Carousels</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="modals.html">Modals</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="popovers-tooltips.html">Tooltips</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="accordion.html">Accordions</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="tablesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-border_all nav-icon"></i>
                    Tables
                </a>
                <ul class="dropdown-menu" aria-labelledby="tablesDropdown">
                    <li>
                        <a class="dropdown-item" href="bs-tables.html">Bootstrap Tables</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="data-tables.html">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="graphsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-pie-chart1 nav-icon"></i>
                    Graphs
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="graphsDropdown">
                    <li class="open-left">
                        <a class="dropdown-toggle sub-nav-link" href="#" id="apexDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Apex Graphs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="apexDropdown">
                            <li>
                                <a class="dropdown-item" href="area-graphs.html">Area Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="bar-graphs.html">Bar Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="column-graphs.html">Column Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="donut-graphs.html">Donut Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="line-graphs.html">Line Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="mixed-graphs.html">Mixed Charts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pie-graphs.html">Pie Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-item" href="morris-graphs.html">Morris Graphs</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="vector-maps.html">Vector Maps</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="google-maps.html">Google Maps</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-alert-triangle nav-icon"></i>
                    Login
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                    <li>
                        <a class="dropdown-item" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="signup.html">Signup</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="forgot-pwd.html">Forgot Password</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="newsletter.html">Newsletter</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="error.html">404</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="error2.html">505</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Navigation end -->
