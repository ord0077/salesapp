<section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">

    <div id="tittle-page">
    <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">Retail Presentation</h4>
    <p data-animate="fadeInUp"><?php foreach($welcome as $w){echo $w->date;}?></p>
    
    </div>	
    </section >

    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">

        <div id="tittle-page">
        <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
        <h4 data-animate="fadeInUp">Sponsor</h4>
        </div>	
    </section >

    
    
<section id="fragments" data-transition="slide" data-state="somestate">
    <?php foreach($sponsers as $sponser){?>
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $sponser->title;?></h3>
    <div class="col-lg-6 slide-2a" >
    
    
    
    <p class="slide" data-animate="fadeInLeft">
    <?php echo $sponser->f1;?>
    <br/><br/>
    <?php echo $sponser->f2;?>
    <br/><br/>
    <?php echo $sponser->f3;?><br/> 
    <br/>
    
    <?php  $h =  explode('<br />',$sponser->f4);
    foreach($h as $h){
        echo $h.'<br>';
    }
    ?>
    <br/>
    <?php echo $sponser->f5;?> <br/>
    <br/>
    <?php echo $sponser->f6;?>
    <br/>
    </p>
    </div>
    
    <div class="col-lg-5 slide-2b ">
    
    <canvas id="canvas1" style="margin-left:50px;"></canvas>
    <canvas id="canvas2" style="margin-left:50px;"></canvas>  
    </div>
    <?php }
    ?>	
    </section>

    <section id="fragments" data-transition="slide">
        <?php foreach($awards as $award){?>
        <h3 class="main-heading" data-animate="fadeInRight"><?php echo $award->title;?></h3>
        <div class="col-lg-7 slide-2c" >
        
        <ul class="slide" style="padding-top:15%;" data-animate="fadeInLeft">
        <li><strong><?php echo $award->f1_bold;?></strong><?php echo $award->f1_normal;?></li>
        <li><strong><?php echo $award->f2_bold;?></strong><?php echo $award->f2_normal;?></li>
        <li><strong><?php echo $award->f3_bold;?></strong><?php echo $award->f3_normal;?></li>
        <li><strong><?php echo $award->f4_bold;?></strong><?php echo $award->f4_normal;?></li>
        <li><strong><?php echo $award->f5_bold;?></strong><?php echo $award->f5_normal;?></li>
        <li><strong><?php echo $award->f6_bold;?></strong><?php echo $award->f6_normal;?></li>
        <li><strong><?php echo $award->f7_bold;?></strong><?php echo $award->f7_normal;?></li>
        <li><strong><?php echo $award->f8_bold;?></strong><?php echo $award->f8_normal;?></li>
        <li><strong><?php echo $award->f9_bold;?></strong><?php echo $award->f9_normal;?></li>
        <li><strong><?php echo $award->f10_bold;?></strong><?php echo $award->f10_normal;?></li>
        </ul>
        </div>
        
        <div class="col-lg-5 slide-2d">
        <img src="./images/logos.jpg" alt="" data-animate="fadeInLeft">
        </div>
        <?php }?>
        </section>
        
        
<section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">

    <div id="tittle-page">
    <img data-transition="concave"  data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">HBL Asset Management Limited</h4>
    </div>	
    </section >
    <section id="fragments" data-transition="concave" class="about-slide">
    <?php foreach($hamls as $haml){?>
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $haml->title;?></h3>
    <div class="col-sm-12 about " data-animate="fadeInRight">
    <h2 data-animate="fadeInRight"></h2>
    <div class="col-sm-1 about-h"></div>
    <div class="col-sm-1 about-h"></div>
    <div class="col-sm-1 about-h an-d-2 " data-animate="fadeInUp" >
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b1);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    </div>
    <div class="col-sm-1 about-h an-d-3" data-animate="fadeInUp">
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b2);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    </div>
    <div class="col-sm-1 about-h an-d-4" data-animate="fadeInUp">
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b3);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    </div>
    <div class="col-sm-1 about-h an-d-5" data-animate="fadeInUp">
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b4);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    </div>
    <div class="col-sm-1 about-h  an-d-6" data-animate="fadeInUp">
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b5);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    
    </div>
    <div class="col-sm-1 about-h  an-d-7" data-animate="fadeInUp">
    <div class="hexagon"></div>
    <p>
    <?php  $box =  explode('<br />',$haml->b6);
    foreach($box as $box){
        echo $box.'<br>';
    }
    ?>
    </p>
    
    </div>
    
    <ul>
    <li class=" an-d-8" style="margin-top:86px;"  data-animate="fadeInRight"><?php echo $haml->f1;?></li>
    <hr class=" an-d-9" data-animate="fadeInLeft">
    <li  class=" an-d-10" data-animate="fadeInRight"><?php echo $haml->f2;?></li>
    <hr class=" an-d-11" data-animate="fadeInLeft">
    <li class=" an-d-12" data-animate="fadeInRight"><?php echo $haml->f3;?></li>
    <hr class=" an-d-13" data-animate="fadeInLeft">
    <li class=" an-d-14" data-animate="fadeInRight"><?php echo $haml->f4;?></li>
    
    </ul>
    
    </div>
    <?php } ?>
    </section>
    
    
    <section id="fragments" data-transition="slide" data-state="some_state1">
    <?php foreach($aums1 as $aum1){?>
    <div style="display:flex;" >
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $aum1->title;?></h3>
    <div class="col-lg-4 slide-2c" >
    <p class="slide" data-animate="fadeInLeft">
    <?php echo $aum1->f1;?>
    </p>
    
    </div>
    
    <div class="col-lg-8 slide-2b1">
    <div class="col-lg-12">
    
    <div class="col-sm-1 deposit-chart"></div>
    <div class="col-sm-10 deposit-chart">
    <h4 style="margin:0 0 50px 0;" data-animate="fadeInUp">Assets Under Management</h4>
    <canvas id="canvas3" style="margin-left:50px;"></canvas>  
    
    
    
    </div>
    </div>
    
    </div>
    <?php } ?>
    </section>
    
    <section id="fragments" data-transition="slide" data-state="some_state2">
    <?php foreach($aums2 as $aum2){?>
    <div style="display:flex;">
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $aum2->title;?></h3>
    <div class="col-lg-4 slide-2c" >
    <p class="slide" data-animate="fadeInLeft">
    <?php echo $aum2->f1;?>
    </p>
    
    </div>
    
    <div class="col-lg-8 slide-2b1">
    <div class="col-lg-12">
    
    <div class="col-sm-1 deposit-chart"></div>
    <div class="col-sm-10 deposit-chart">
    <h4 style="margin:0 0 50px 0;" data-animate="fadeInUp">Category Wise Funds Under Management </h4>
    <canvas id="canvas4" style="margin-left:50px;"></canvas>  
    </div>
    
    </div>
    
    
    </div>
    <?php } ?>
    </section>
    
    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">
    
    <div id="tittle-page">
    <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">Board of Directors</h4>
    </div>	
    </section >
    
    <section data-transition="concave" class="board-directors">
    <h3 class="main-heading" data-animate="fadeInRight">board of directors</h3>
    
    <div class="col-sm-12 bd-team">
    
    <div class="col-sm-12" style="float:left;margin-top: 200px;">
    
    
    
    <div class="col-sm-2 team-member animated fadeInDown an-d-2" style="margin-left: 74px;">
    <img src="images/005.jpg" alt="">
    <strong>Shahid Ghaffar</strong>
    <span>Director</span>
    </div>
    
    <div class="col-sm-2 team-member animated fadeInRight an-d-3" >
    <img src="images/bd01.jpg" alt="">
    <strong>Ava Ardeshir Cowasjee </strong>
    <span>Director</span>
    
    </div>
    <div class="col-sm-2 team-member animated fadeInLeft an-d-4">
    <img src="images/bd02.jpg" alt="">
    <strong>Rayomond Kotwal</strong>
    <span>Director</span>
    
    </div>
    
    
    <div class="col-sm-2 team-member animated fadeInUp an-d-5" >
    <img src="images/006.jpg" alt="">
    <strong>Mr. Rizwan Haider</strong>
    <span>Director</span>
    
    </div>
    <div class="col-sm-2 team-member animated fadeInDown an-d-6">
    <img src="images/012.jpg" alt="">
    <strong>Shabbir Hashmi</strong>
    <span>Director</span>
    </div>
    </div>
    
    </div>
    </section>
    
    
    
    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">
    
    <div id="tittle-page">
    <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">Management Team</h4>
    </div>	
    </section >
    <section id="fragments" data-transition="concave" class="team-slide">
    <h3 class="main-heading" >Management Team</h3>
    <div class="col-sm-12 team">
    
    
    <!-- <div class="col-sm-2 team-member  animated fadeInRight an-d-2" data-animate="fadeInRight" style="margin-left:160px;">
    <img src="images/001.jpg" alt="">
    <strong>Farid Ahmed Khan</strong>
    <span>Chief Executive Officer</span>
    
    </div> -->
    <div class="col-sm-2 team-member animated fadeInUp an-d-3" data-animate="fadeInRight" style="margin-left:300px;">
    <img src="images/002.jpg" alt="">
    <strong>Muhammad Imran</strong>
    <span>Chief Investment Officer</span>
    
    </div>
    <div class="col-sm-2 team-member  animated fadeInDown an-d-4">
    <img src="images/018.jpg" alt="">
    <strong>Noman Qurban</strong>
    <span>CFO and Company Secretary</span>
    
    </div>
    
    <!--<div class="col-sm-2 team-member  animated fadeInLeft an-d-5" >
    <img src="images/004.jpg" alt="">
    <strong>Mohammad Amir Khan</strong>
    <span>Head of Product Development & Strategy</span>
    </div>
    --->
    <div class="col-sm-2 team-member  animated fadeInRight an-d-5"  >
    <img src="images/008.jpg" alt="">
    <strong>Hassan Mehdi </strong>
    <span>Head of Operations</span>
    
    </div>
    <div class="col-sm-2 team-member   animated fadeInUp an-d-6">
    <img src="images/007.jpg" alt="">
    <strong>Mubeen Ashraf Bhimani</strong>
    <span>Head of Compliance</span>
    
    </div>
    <div class="col-sm-2 team-member  animated fadeInDown an-d-7">
    <img src="images/010.jpg" alt="">
    <strong>Faisal Islam</strong>
    <span>Head Of Information Technology</span>
    
    </div>
    
    
    
    </div>
    
    </section>
    
    
    <section id="fragments" data-transition="concave" class="team-slide">
    <h3 class="main-heading" >Investment Committee
    </h3>
    <div class="col-sm-12 team">
    
    
    <!-- <div class="col-sm-2 team-member  animated fadeInRight an-d-2" data-animate="fadeInRight" style="margin-left:57px;">
    <img src="images/001.jpg" alt="">
    <strong>Farid Ahmed Khan</strong>
    <span>Chief Executive Officer</span>
    
    </div> -->
    <div class="col-sm-2 team-member animated fadeInUp an-d-3" data-animate="fadeInRight" style="    margin-left: 200px;">
    <img src="images/002.jpg" alt="">
    <strong>Muhammad Imran</strong>
    <span>Chief Investment Officer</span>
    
    </div>
    
    <div class="col-sm-2 team-member  animated fadeInLeft an-d-4" >
    <img src="images/016.jpg" alt="">
    <strong>Faizan Saleem</strong>
    <span>Head of Fixed Income</span>
    
    </div>
    <div class="col-sm-2 team-member  animated fadeInRight an-d-5"  >
    <img src="images/015.jpg" alt="">
    <strong>Sateesh Balani</strong>
    <span>Head of Research</span>
    
    </div>
    <div class="col-sm-2 team-member   animated fadeInUp an-d-6">
    <img src="images/013.jpg" alt="">
    <strong>Raza Inam</strong>
    <span>Senior Research Analyst</span>
    
    </div>
    <div class="col-sm-2 team-member  animated fadeInDown an-d-7">
    <img src="images/017.jpg" alt="">
    <strong>Adeel Abdul Wahab</strong>
    <span>Fund Manager Equity</span>
    
    </div>
    
    <div class="col-sm-2 team-member  animated fadeInLeft an-d-8">
    <img src="images/014.jpg" alt="">
    <strong>Jawad Naeem</strong>
    <span>Fund Manager Equity</span>
    
    </div>
    
    
    
    
    </div>
    
    </section>    
    
    <section id="fragments" data-transition="concave" class="milestones">
    <h3 class="main-heading" data-animate="fadeInRight">Milestones</h3>
    
    <div id="mar-2007" data-animate="fadeInUp">
    <strong>Mar’2007</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Launch of First Fund HBL IF</p>
    </div>
    
    <div id="apr-2007"  data-animate="fadeInDown">
    <p>Started with Rs. 2.7 billion Asset Under Management</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>Apr’2007</strong>
    </div>
    
    <div id="aug-2007"  data-animate="fadeInUp">
    <strong>Aug’2007</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Launch of Stock Market Fund HBL SF</p>
    </div>
    
    <div id="dec-2007"  data-animate="fadeInDown">
    <p>Launch of Balanced Fund HBL MAF</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>Dec’2007</strong>
    </div>
    
    <div id="jul-2010"  data-animate="fadeInUp">
    <strong>Jul’2010</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Launch of Money Market Fund HBL MMF</p>
    </div>
    
    <div id="may-2011"  data-animate="fadeInDown">
    <p>Islamic Money Market Fund HBL IMMF</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>May’2011</strong>
    </div>
    
    <div id="jul-2011"  data-animate="fadeInUp">
    <strong>Jul’2011</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Crossed Rs. 10 billion Mark</p>
    </div>
    
    <div id="dec-2011"  data-animate="fadeInDown">
    <p>Launch of Pension Schemes HBL PF, HBLIPF</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>Dec’2011</strong>
    </div>
    
    <div id="jul-2013"  data-animate="fadeInUp">
    <strong>Jul’2013</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Crossed Rs. 20 billion Mark</p>
    </div>
    
    <div id="jun-2015"  data-animate="fadeInDown">
    <p>Acquisition of PICIC Asset Management</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>Jun’2015</strong>
    </div>
    
    <div id="sep-2016"  data-animate="fadeInUp">
    <strong>Sep’2016</strong>
    <img src="images/milestones-stock.jpg" alt="">
    <p>Merger Process Completed</p>
    </div>
    
    <div id="dec-2016"  data-animate="fadeInDown">
    <p>Rs. 50 billion Mark of Assets Under Management Achieved</p>
    <img src="images/milestones-stock.jpg" alt="">
    <strong>Dec’2016</strong>
    </div>
    </section>
    
    <section id="fragments" class="hbl-whyus" data-transition="concave" data-background-transition="concave">
    <?php foreach($ytp as $y){?>
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $y->title?></h3>
    
    <div class="col-sm-10" style="margin-left:114px;">
    <h4 data-animate="fadeInUp"><?php echo $y->sh?></h4>
    <ul>
    <li style="padding-top:15px;"  data-animate="fadeInRight">
    <?php echo $y->f1;?>
    </li>
    <hr  data-animate="fadeInRight"/>
    <li  data-animate="fadeInRight">
    <?php echo $y->f2;?>
    </li>
    <hr  data-animate="fadeInRight"/>
    <li  data-animate="fadeInRight"><?php echo $y->f3;?>
    </li>
    <hr  data-animate="fadeInRight"/>
    <li  data-animate="fadeInRight"><?php echo $y->f4;?>
    </li>
    <hr  data-animate="fadeInRight"/>
    <li  data-animate="fadeInRight">
    <?php echo $y->f5;?>
    </li>
    </ul>
    
    </div>
    <?php }?>
    </section>
    
    
    
    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">
    
    <div id="tittle-page">
    <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">What are Mutual Funds?
    </h4>
    </div>	
    </section >
    <section id="fragments" class="mutual-funds" data-transition="concave" data-background-transition="concave">
    <?php foreach($mf as $m){?>
    <h3 class="main-heading" data-animate="fadeInRight"><?php echo $m->title;?></h3>
    <div class="col-sm-10" style="margin:0 auto;">
    
    <ul>
    <li  data-animate="fadeInRight"><?php echo $m->f1;?></li>
    <li  data-animate="fadeInRight"><?php echo $m->f2;?></li>
    <li  data-animate="fadeInRight"><?php echo $m->f3;?></li>
    <li  data-animate="fadeInRight"><?php echo $m->f4;?></li>
    </ul>
    <p style="margin:0px 0;">&nbsp;</p> 
    
    <iframe data-animate="fadeInRight" width="660" height="415" src="https://www.youtube.com/embed/Ih7KJwjWWM4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <?php }?>
    </section>
    <section id="fragments" class="hbl-whyus" data-transition="concave" data-background-transition="concave">
    <h3 class="main-heading" data-animate="fadeInRight">How do Mutual Funds Work?</h3>
    
    <div style="position:relative;    margin-top: 6%;">
    <div class="/fragment investor animated fadeIn an-d-2" id="fregment" data-animate="fadeInOut">
    <img src="images/investor.png"  class="invest " alt="">	
    </div>
    <div class="investor-text /fragment animated fadeIn an-d-2">
    Pool their money in
    </div>
    <div class="/fragment investor-arrow animated fadeIn an-d-2" id="fregment" data-animate="fadeInOut">
    <img src="images/ar1.png"  class="invest-arrow" alt="">
    
    </div>
    
    <div class="/fragment fund-round animated fadeIn an-d-3" id="fregment" data-animate="fadeInOut">
    <img src="images/fund.png"  class="fund-img" alt="">	
    </div>
    <div class="fund-text /fragment animated fadeIn an-d-3">
    Which is invested in
    </div>
    <div class="/fragment fund-arrow animated fadeIn an-d-3" id="fregment" data-animate="fadeInOut">
    <img src="images/ar2.png"  class="fund-arrow-img" alt="">
    
    </div>
    
    <div class="/fragment securities-round animated fadeIn an-d-4" id="fregment" data-animate="fadeInOut">
    <img src="images/securities.png"  class="securities-img" alt="">	
    </div>
    <div class="securities-text /fragment animated fadeIn an-d-4">
    That Generates
    </div>
    <div class="/fragment securities-arrow animated fadeIn an-d-4" id="fregment" data-animate="fadeInOut">
    <img src="images/ar3.png"  class="securities-arrow-img" alt="">
    
    </div>
    
    <div class="/fragment returns-round animated fadeIn an-d-5" id="fregment" data-animate="fadeInOut">
    <img src="images/returns.png"  class="returns-img" alt="">	
    </div>
    <div class="returns-text /fragment animated fadeIn an-d-5">
    Given back to
    </div>	
    <div class="/fragment returns-arrow animated fadeIn an-d-5" id="fregment" data-animate="fadeInOut">
    <img src="images/ar4.png"  class="returns-arrow-img" alt="">
    
    </div>
    </div>
    </section>
    
    
    
    
    
    <section id="fragments" class="ad-mutual-funds fund-type" data-transition="concave" data-background-transition="concave">
    <h3 class="main-heading" data-animate="fadeInRight">Types of Mutual Funds</h3>
    <div class="col-sm-10" style="margin-left: 117px;">
    
    
    <p  data-animate="fadeInRight"><strong>By Structure</strong></p>
    <li  data-animate="fadeInRight"><strong>Open End Funds: </strong>These units are issued and redeemed by the Management Company<br/></li>
    <li  data-animate="fadeInRight"><strong>Closed End Funds: </strong>Only traded at the Stock Exchange and are not redeemable<br/> </li>
    <p  data-animate="fadeInRight"><strong>By Investment Objective
    </strong></p>
    <li  data-animate="fadeInRight"><strong>Money Market Funds:  </strong>Invest in most liquid securities e.g., Bank Deposits, Treasury bills etc.
    <br/></li>
    <li  data-animate="fadeInRight"><strong>Growth Funds – Equity Funds: </strong>Invest in Equity Securities<br/> </li>
    <li  data-animate="fadeInRight"><strong>Income Funds / Debt Funds: </strong>Invest in longer term Government & Corporate Bonds.
    <br/></li>
    <li  data-animate="fadeInRight"><strong>Balanced Funds: </strong>Invest in both Fixed Income and Equity Securities<br/></li>
    <li  data-animate="fadeInRight"><strong>Asset Allocation Funds: </strong>Usually specifies the percentage of investment in equity and Fixed Income Securities.
    <br/> </li>
    <li  data-animate="fadeInRight"><strong>Capital Protected Funds: </strong>Guarantees the protection of  capital through different methodologies.
    <br/> </li>
    
    <p  data-animate="fadeInRight"><strong>Special Funds
    
    </strong></p>
    <li  data-animate="fadeInRight"><strong>Shariah Compliant Funds:</strong>All assets are Shariah Compliant with the approval of Shariah Advisor<br/></li>
    <li  data-animate="fadeInRight"><strong>Sector Specific Funds: </strong>Invest only in the sector that is described in offering document<br/> </li>
    <li  data-animate="fadeInRight"><strong>Govt. Securities Funds: </strong>Invest in Government bonds both short term and long term.<br/></li>
    
    
    </div>
    <img src="images/mf-img02.png" alt="" data-animate="fadeInRight" style="width: 390px;">
    </section>
    
    
    <section id="fragments" class="ad-mutual-funds" data-transition="concave" data-background-transition="concave">
    <?php foreach($iimf as $i){?>
    
    
    <div class="col-sm-10" style="margin-left:117px;">
    <h4 data-animate="fadeInUp" style="text-align:left;"><?php echo $i->sh;?></h4>
    
    <p  data-animate="fadeInRight"><strong><?php echo $i->sf;?></strong></p>
    <ul style="float:left;list-style:none;">
    <li  data-animate="fadeInRight"><i class="icon ico-user"></i><strong><?php echo $i->f1;?></strong><br/></li>
    <li  data-animate="fadeInRight"><i class="icon ico-tax-rebate"></i><strong><?php echo $i->f2;?></strong><br/> </li>
    <li  data-animate="fadeInRight"><i class="icon ico-how-to-investment"></i><strong><?php echo $i->f3;?></strong><br/></li>
    <li  data-animate="fadeInRight"><i class="icon ico-funds"></i><strong><?php echo $i->f4;?></strong><br/></li>
    <li  data-animate="fadeInRight"><i class="icon ico-why-hbl-aml"></i><strong><?php echo $i->f5;?></strong><br/> </li>
    <li  data-animate="fadeInRight"><i class="icon ico-check-form"></i><strong><?php echo $i->f6;?></strong><br/> </li>
    <li  data-animate="fadeInRight"><i class="icon ico-bar-chart"></i><strong><?php echo $i->f7;?></strong><br/></li>
    
    
    </ul>
    
    </div>
    <img src="images/mf-img02.png" alt="" data-animate="fadeInRight" style="width: 390px; margin:-0px 100px 0 0!important;">
    <?php }?>
    </section>
    
    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">
    
    <div id="tittle-page">
    <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
    <h4 data-animate="fadeInUp">Shariah Advisor</h4>
    </div>
    </section >
    
    
    <section id="fragments" class="ad-mutual-funds sh-board" data-transition="concave" data-background-transition="concave">
    <h3 class="main-heading" data-animate="fadeInRight">Shariah Advisors Profile</h3>
    <div class="col-sm-8" style="margin:0 auto;">
    <h4 data-animate="fadeInUp">Al Hilal – Shariah Supervisory Board
    
    </h4>
    
    <p  data-animate="fadeInRight"><strong>Al Hilal is a corporate entity with a mandate to provide Islamic financial advisory services and is the leading player in Shariah certification market in Pakistan. Shariah Supervisory Council of Al Hilal is composed of several renowned Shariah Scholars belonging to different schools of thought who are well versed in the field of Islamic Jurisprudence and Finance.
    </strong></p>
    <img src="images/sh-board.png" class="sh-board-main" style="margin-top:0 !important;" alt="">
    
    
    </div>
    <img src="images/sh-board2.png" style="margin-top:-800px !important;" alt="" data-animate="fadeInRight">
    </section>
    <section data-transition="concave" data-background="./images/intro-img.png" data-background-repeat="no-repeat" data-background-position="top center" data-background-size="100%">

        <div id="tittle-page">
        <img data-transition="concave" data-animate="fadeInUp" src="./images/hbl-logo.png" alt="">
        <h4 data-animate="fadeInUp">Risk Profiler</h4>
        </div>
        </section >
        