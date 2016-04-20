<?php
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
$showsidepost = $hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT);

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));


$fplink1 = (!empty($PAGE->theme->settings->fplink1));
if ($fplink1) {$fplink1 = $PAGE->theme->settings->fplink1;} else { $fplink1 = "#"; }
$fplink2 = (!empty($PAGE->theme->settings->fplink2));
if ($fplink2) {$fplink2 = $PAGE->theme->settings->fplink2;} else { $fplink2 = "#"; }
$fplink3 = (!empty($PAGE->theme->settings->fplink3));
if ($fplink3) {$fplink3 = $PAGE->theme->settings->fplink3;} else { $fplink3 = "#"; }
$fplink4 = (!empty($PAGE->theme->settings->fplink4));
if ($fplink4) {$fplink4 = $PAGE->theme->settings->fplink4;} else { $fplink4 = "#"; }
$fplink5 = (!empty($PAGE->theme->settings->fplink4));
if ($fplink5) {$fplink5 = $PAGE->theme->settings->fplink5;} else { $fplink5 = "#"; }
$fplink6 = (!empty($PAGE->theme->settings->fplink4));
if ($fplink6) {$fplink6 = $PAGE->theme->settings->fplink6;} else { $fplink6 = "#"; }

//block titles
$fptitle1 = (!empty($PAGE->theme->settings->fptitle1));
if ($fptitle1) {$fptitle1 = $PAGE->theme->settings->fptitle1;} else { $fptitle1 = ""; }

$fptitle2 = (!empty($PAGE->theme->settings->fptitle2));
if ($fptitle2) {$fptitle2 = $PAGE->theme->settings->fptitle2;} else { $fptitle2 = ""; }

$fptitle3 = (!empty($PAGE->theme->settings->fptitle3));
if ($fptitle3) {$fptitle3 = $PAGE->theme->settings->fptitle3;} else { $fptitle3 = ""; }

$fptitle4 = (!empty($PAGE->theme->settings->fptitle4));
if ($fptitle4) {$fptitle4 = $PAGE->theme->settings->fptitle4;} else { $fptitle4 = ""; }

$fptitle5 = (!empty($PAGE->theme->settings->fptitle5));
if ($fptitle5) {$fptitle5 = $PAGE->theme->settings->fptitle5;} else { $fptitle5 = ""; }

$fptitle6 = (!empty($PAGE->theme->settings->fptitle6));
if ($fptitle6) {$fptitle6 = $PAGE->theme->settings->fptitle6;} else { $fptitle6 = ""; }

//block texts
$fptext1 = (!empty($PAGE->theme->settings->fptext1));
if ($fptext1) {$fptext1 = $PAGE->theme->settings->fptext1;} else { $fptext1 = ""; }

$fptext2 = (!empty($PAGE->theme->settings->fptext2));
if ($fptext2) {$fptext2 = $PAGE->theme->settings->fptext2;} else { $fptext2 = ""; }

$fptext3 = (!empty($PAGE->theme->settings->fptext3));
if ($fptext3) {$fptext3 = $PAGE->theme->settings->fptext3;} else { $fptext3 = ""; }

$fptext4 = (!empty($PAGE->theme->settings->fptext4));
if ($fptext4) {$fptext4 = $PAGE->theme->settings->fptext4;} else { $fptext4 = ""; }

$fptext5 = (!empty($PAGE->theme->settings->fptext5));
if ($fptext5) {$fptext5 = $PAGE->theme->settings->fptext5;} else { $fptext5 = ""; }

$fptext6 = (!empty($PAGE->theme->settings->fptext6));
if ($fptext6) {$fptext6 = $PAGE->theme->settings->fptext6;} else { $fptext6 = ""; }


$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}

if ($hascustommenu) {
    $bodyclasses[] = 'has_navbar';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">
	<div id="wrapper">
	
<!-- start OF header -->
		<div id="page-header" class="page-header-home">
			<a href="<?php p($CFG->wwwroot) ?>"><img src="<?php echo $OUTPUT->pix_url('logo', 'theme')?>" id="logo" alt="logo" /></a>
				<div class="bmbflogo"><a href="http://www.bmbf.gv.at"><img src="<?php echo $OUTPUT->pix_url('bmbf', 'theme')?>" id="bmbflogo" alt="bmbflogo" /></a></div>
				<div class="headermenu">
        		
        		<?php if (isloggedin() && !isguestuser()) { ?>
				<div class="isnname">
				<div><?php echo $USER->firstname;?> <?php echo $USER->lastname;?></div><a id="isinlog-profile" href="<?php p($CFG->wwwroot) ?>/user/edit.php"><?php echo get_string('myprofile'); ?></a> |  
				<a id="isinlog" href="<?php p($CFG->wwwroot) ?>/login/logout.php"><?php echo get_string('logout'); ?></a>				
				</div>
				
				<?php } else if (isguestuser()) { ?>
				<div class="isnname">
				<?php echo $USER->firstname;?> <?php echo $USER->lastname;?> | 
				<a id="isinlog" href="<?php p($CFG->wwwroot) ?>/login/index.php"><?php echo get_string('login'); ?></a>
				</div>
			
				
				<?php } else {?>
	<form id="login2" class="loginform2" action="<?php p($CFG->wwwroot) ?>/login/index.php" method="post">
	
	<label for="login_username2" id="label1">Anmeldename</label>
	<input id="login_username2" type="text" value="" name="username">
	
	<label for="login_password2" id="plabel">Kennwort</label>
	<input id="login_password2" type="password" value="" name="password">
	<input type="submit" value="" id="newlogin">
	<div class="clearfix"></div>
	</form>
	 <div id="loginst">
         <div>
     		<a href="<?php p($CFG->wwwroot) ?>/login/forgot_password.php">Kennwort vergessen</a><br />
     		<a href="<?php p($CFG->wwwroot) ?>/login/signup.php">Jetzt registrieren</a>
         </div>
     </div> 
				<?php } ?>
      		  
				 </div>
				
				
		</div>
<!-- end of header -->		

<a href="<?php echo $fplink1 ?>" class="frontblock fb-1">
<span class="fb-title"><span><?php echo $fptitle1 ?></span></span>
<span class="fb-content"><span><?php echo $fptext1 ?></span></span>
</a>

<a href="<?php echo $fplink2 ?>" class="frontblock fb-2">
<span class="fb-title"><span><?php echo $fptitle2 ?></span></span>
<span class="fb-content"><span><?php echo $fptext2 ?></span></span>
</a>

<a href="<?php echo $fplink3 ?>" class="frontblock fblast fb-3">
<span class="fb-title"><span><?php echo $fptitle3 ?></span></span>
<span class="fb-content"><span><?php echo $fptext3 ?></span></span>
</a>

<a href="<?php echo $fplink4 ?>" class="frontblock fb-4">
<span class="fb-title"><span><?php echo $fptitle4 ?></span></span>
<span class="fb-content"><span><?php echo $fptext4 ?></span></span>
</a>

<a href="<?php echo $fplink5 ?>" class="frontblock fb-5">
<span class="fb-title"><span><?php echo $fptitle5 ?></span></span>
<span class="fb-content"><span><?php echo $fptext5 ?></span></span>
</a>

<a href="<?php echo $fplink6 ?>" class="frontblock fblast fb-6">
<span class="fb-title"><span><?php echo $fptitle6 ?></span></span>
<span class="fb-content"><span><?php echo $fptext6 ?></span></span>
</a>


<div class="clearfix"></div>

<div id="page-content-wrapper">

<!-- start of navbar -->
<?php if ($hasnavbar) { ?>
        <div class="navbar clearfix">
          <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
          <div class="navbutton"> <?php echo $PAGE->button; ?></div>
        </div>
<?php } ?>
<!-- end of navbar -->

<!-- start OF moodle CONTENT -->
 <div id="page-content">
        <div id="region-main-box">
            <div id="region-post-box">
            
                <div id="region-main-wrap">
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo method_exists($OUTPUT, "main_content")?$OUTPUT->main_content():core_renderer::MAIN_CONTENT_TOKEN ?>
                        </div>
                    </div>
                </div>
                
                <?php if ($hassidepre) { ?>
                <div id="region-pre" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>
                
                <?php if ($hassidepost) { ?>
                <div id="region-post" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
<!-- end OF moodle CONTENT -->
<div class="clearer"></div>
</div>
<!-- end OF moodle CONTENT wrapper -->


<!-- start of footer -->	
<div id="page-footer">
<img src="<?php echo $OUTPUT->pix_url('footerimage', 'theme')?>" id="footerlogo" alt="footerlogo" />
<div><a href="https://www.nachqualifizierung.at/mod/page/view.php?id=25">Impressum</a></div>
<?php
//echo $OUTPUT->login_info();
//echo $OUTPUT->home_link();
echo $OUTPUT->standard_footer_html();
?>
</div>
<!-- end of footer -->	

<div class="clearer"></div>

	</div><!-- end #wrapper -->
</div><!-- end #page -->	

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
