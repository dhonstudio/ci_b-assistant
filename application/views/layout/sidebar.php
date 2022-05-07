<?php
$sidebar_home = [
    'title' => 'Dasbor',
    'href' => base_url(),
];
$sidebar = [
    [
        'title' => 'Pembukuan',
        'children' => [
            [
                'title' => 'Kas dan Bank',
                'href' => base_url('transactions/cash'),
                'icon' => 'fas fa-fw fa-money-bill',
            ],
            [
                'title' => 'Utilities',
                'href' => '#',
                'icon' => 'fas fa-fw fa-wrench',
                'children' => [
                    [
                        'title' => 'Custom Utilities:',
                        'children' => [
                            [
                                'title' => 'Colors',
                                'href' => 'utilities-color.html'
                            ],
                            [
                                'title' => 'Borders',
                                'href' => 'utilities-border.html'
                            ],
                            [
                                'title' => 'Animations',
                                'href' => 'utilities-animation.html'
                            ],
                            [
                                'title' => 'Other',
                                'href' => 'utilities-other.html'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'title' => 'Interface',
        'children' => [
            [
                'title' => 'Components',
                'href' => '#',
                'icon' => 'fas fa-fw fa-cog',
                'children' => [
                    [
                        'title' => 'Custom Components:',
                        'children' => [
                            [
                                'title' => 'Buttons',
                                'href' => 'buttons.html'
                            ],
                            [
                                'title' => 'Cards',
                                'href' => 'cards.html'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Utilities',
                'href' => '#',
                'icon' => 'fas fa-fw fa-wrench',
                'children' => [
                    [
                        'title' => 'Custom Utilities:',
                        'children' => [
                            [
                                'title' => 'Colors',
                                'href' => 'utilities-color.html'
                            ],
                            [
                                'title' => 'Borders',
                                'href' => 'utilities-border.html'
                            ],
                            [
                                'title' => 'Animations',
                                'href' => 'utilities-animation.html'
                            ],
                            [
                                'title' => 'Other',
                                'href' => 'utilities-other.html'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'title' => 'Addons',
        'children' => [
            [
                'title' => 'Pages',
                'href' => '#',
                'icon' => 'fas fa-fw fa-folder',
                'children' => [
                    [
                        'title' => 'Login Screens:',
                        'children' => [
                            [
                                'title' => 'Login',
                                'href' => 'login.html'
                            ],
                            [
                                'title' => 'Register',
                                'href' => 'register.html'
                            ],
                            [
                                'title' => 'Forgot Password',
                                'href' => 'forgot-password.html'
                            ]
                        ]
                    ],
                    [
                        'title' => 'Other Pages:',
                        'children' => [
                            [
                                'title' => '404 Page',
                                'href' => '404.html'
                            ],
                            [
                                'title' => 'Blank Page',
                                'href' => 'blank.html'
                            ],
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Charts',
                'href' => 'charts.html',
                'icon' => 'fas fa-fw fa-chart-area',
            ],
            [
                'title' => 'Tables',
                'href' => 'tables.html',
                'icon' => 'fas fa-fw fa-table',
            ],
        ]
    ],
];
?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="sidebar-brand-text mx-3">B ASSIST <sup>DS</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= $page == $sidebar_home['title'] ? 'active' : '' ?>">
            <a class="nav-link" href="<?= $sidebar_home['href'] ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span><?= $sidebar_home['title'] ?></span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php foreach ($sidebar as $key_s => $s) : ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                <?= $s['title'] ?>
            </div>

            <?php if (isset($s['children'])) : ?>
                <?php foreach ($s['children'] as $sc) : ?>
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item <?= $page == $sc['title'] ? 'active' : '' ?>">
                        <?php if (isset($sc['children'])) : ?>
                            <a class="nav-link collapsed" href="<?= $sc['href'] ?>" data-toggle="collapse" data-target="#collapse<?= trim($sc['title'], ' ') ?>" aria-expanded="true" aria-controls="collapse<?= trim($sc['title'], ' ') ?>">
                                <i class="<?= $sc['icon'] ?>"></i>
                                <span><?= $sc['title'] ?></span>
                            </a>
                            <div id="collapse<?= trim($sc['title'], ' ') ?>" class="collapse <?= $page == $sc['title'] ? 'show' : '' ?>" aria-labelledby="heading<?= trim($sc['title'], ' ') ?>" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <?php foreach ($sc['children'] as $key_scc => $scc) : ?>
                                        <h6 class="collapse-header"><?= $scc['title'] ?></h6>
                                        <?php if (isset($scc['children'])) : ?>
                                            <?php foreach ($scc['children'] as $sccc) : ?>
                                                <a class="collapse-item <?= $subpage == $sccc['title'] ? 'active' : '' ?>" href="<?= $sccc['href'] ?>"><?= $sccc['title'] ?></a>
                                            <?php endforeach ?>
                                        <?php endif ?>

                                        <?php
                                        $k = count($sc['children']) - 1;
                                        if (count($sc['children']) > 1 && $key_scc < $k) :
                                        ?>
                                            <div class="collapse-divider"></div>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <a class="nav-link" href="<?= $sc['href'] ?>">
                                <i class="<?= $sc['icon'] ?>"></i>
                                <span><?= $sc['title'] ?></span></a>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>

                <?php
                $ks = count($sidebar) - 1;
                if (count($sidebar) > 1 && $key_s < $ks) :
                ?>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                <?php endif ?>
            <?php endif ?>
        <?php endforeach ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div>

    </ul>
    <!-- End of Sidebar -->