
<?php $this->load->view("header"); ?>




   
 

<?php $this->load->view("menu"); ?>


   


    <div style="width:100%" > 
        <table width="100%" cellpadding="0px" cellspacing="0px"  >
        <tr>            
            <td width="70%" >
                <div style="width:100%;float:left;padding-left:0;text-align:left;margin-left:0;"> <script type="text/javascript" src="js/jssor.slider.min.js"></script>
                <!-- use jssor.slider.debug.js instead for debug -->
                <script>
                    jssor_1_slider_init = function () {

                        var jssor_1_SlideshowTransitions = [
                            { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} },
                            { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} },
                            { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} },
                            { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} },
                            { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $Jease$.$InOutSine, $Top: $Jease$.$OutWave, $Clip: $Jease$.$InOutQuad }, $Outside: true, $Round: { $Top: 1.3} },
                            { $Duration: 1000, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $Jease$.$OutQuad },
                            { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $Jease$.$OutQuad },
                            { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} },
                            { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} },
                            { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $Jease$.$OutJump, $Round: { $Top: 1.5} }
                        ];

                        var jssor_1_options = {
                            $AutoPlay: true,
                            $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $BulletNavigatorOptions: {
                                $Class: $JssorBulletNavigator$
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        //responsive code begin
                        //you can remove responsive code if you don't want the slider scales while window resizing
                        function ScaleSlider() {
                            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                            if (refSize) {
                                refSize = Math.min(refSize, 950);
                                jssor_1_slider.$ScaleWidth(refSize);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
                        ScaleSlider();
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        //responsive code end
                    };
                </script>

                <style>
        
                    /* jssor slider bullet navigator skin 01 css */
                    /*
                    .jssorb01 div           (normal)
                    .jssorb01 div:hover     (normal mouseover)
                    .jssorb01 .av           (active)
                    .jssorb01 .av:hover     (active mouseover)
                    .jssorb01 .dn           (mousedown)
                    */
                    .jssorb01 {
                        position: absolute;
                    }
                    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                        position: absolute;
                        /* size of bullet elment */
                        width: 12px;
                        height: 12px;
                        filter: alpha(opacity=70);
                        opacity: .7;
                        overflow: hidden;
                        cursor: pointer;
                        border: #000 1px solid;
                    }
                    .jssorb01 div { background-color: gray; }
                    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                    .jssorb01 .av { background-color: #fff; }
                    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

                    /* jssor slider arrow navigator skin 05 css */
                    /*
                    .jssora05l                  (normal)
                    .jssora05r                  (normal)
                    .jssora05l:hover            (normal mouseover)
                    .jssora05r:hover            (normal mouseover)
                    .jssora05l.jssora05ldn      (mousedown)
                    .jssora05r.jssora05rdn      (mousedown)
                    */
                    .jssora05l, .jssora05r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 40px;
                        height: 40px;
                        cursor: pointer;
                        background: url('<?php echo base_url(); ?>assets/img/a17.png') no-repeat;
                        overflow: hidden;
                    }
                    .jssora05l { background-position: -10px -40px; }
                    .jssora05r { background-position: -70px -40px; }
                    .jssora05l:hover { background-position: -130px -40px; }
                    .jssora05r:hover { background-position: -190px -40px; }
                    .jssora05l.jssora05ldn { background-position: -250px -40px; }
                    .jssora05r.jssora05rdn { background-position: -310px -40px; }
                </style>

                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden; visibility: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('<?php echo base_url(); ?>assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                        
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden;">
                                                                                                                     
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl1.jpg" width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="Banner/sl2.jpg"  width="900px" height="350px"/>
                        </div>

                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla27.jpg"  width="900px" height="350px"/>
                        </div>
                          <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla30_.jpg"  width="900px" height="350px"/>
                        </div>
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla28_.jpg"  width="900px" height="350px"/>
                        </div>                                            
                        
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla32.jpg"  width="900px" height="350px"/>
                        </div>
                       
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla36.jpg"  width="900px" height="350px"/>
                        </div>
                        
                        
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/1.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/2.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/3.jpg"  width="900px" height="350px"/>
                        </div>                        
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/5.jpg"  width="900px" height="350px"/>
                        </div>


                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/1.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/2.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/3.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/5.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/6.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/8.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/17.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="Banner/2017/18.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/22.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2017/23.jpg"  width="900px" height="350px"/>
                        </div>
                        
                        
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2016/1.jpg"  width="900px" height="350px"/>
                        </div>                        
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2016/3.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2016/4.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2016/5.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2016/6.jpg"  width="900px" height="350px"/>
                        </div>
                        
                        
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla37.jpg"  width="900px" height="350px"/>
                        </div>
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla38.jpg"  width="900px" height="350px"/>
                        </div>
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla39.jpg"  width="900px" height="350px"/>
                        </div>
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla40.jpg"  width="900px" height="350px"/>
                        </div>


                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla34.jpg"  width="900px" height="350px"/>
                        </div>
                         <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/gla35.jpg"  width="900px" height="350px"/>
                        </div>

                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl3.jpg"  width="900px" height="350px"/>
                        </div>
                        
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl5.jpg"  width="900px" height="350px"/>
                        </div>
                      
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl6.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl7.jpg" width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/sl8.jpg"  width="900px" height="350px"/>
                        </div>

                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/J1.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/J2.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/J3.jpg"  width="900px" height="350px"/>
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>assets/Banner/2018/J4.jpg"  width="900px" height="350px"/>
                        </div>
                                                
                    </div>
                    <!-- Bullet Navigator -->
                    
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
                </div>

                <script>
                    jssor_1_slider_init();
                </script>
                </div>
            </td>
            <td width="30%"  valign="top"    >
            <div  >
                <div class="popup2" >
   

      <div style="background: url(banner/con277.html) ;background-size:100%;">

   <div class="text2"><b>What's New</b> </div>
   <div class="vticker2">
   <div id="MyDivName" class="flexcroll" style=" overflow:auto;height:320px;  ">  
                <ul >
                      <li><a href='http://182.18.150.93/Circular/WHATSNEWS183.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding Office Order(Khandan)<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS182.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice_Exam Centre Change Of Odd Semester Examination_2018-19<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS181.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px; font-weight: bold;">Notice- Private Student Exam Centre list Odd Semester 2018_19</span> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS180.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px; font-weight: bold;">Revised Office Order Regarding Exam Centre list Odd Semester 2018-19</span> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS179.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px;">Revised Examination Scheme of ODD Semester Exam 2018-19</span> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS173.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice-Letter Regarding Back Form Open LLB &amp; BALLB I Semester<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS171.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Invitation Letter for First Convocation 08 Dec 2018&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /> </a></li><li><a href='http://182.18.150.93/Circular/Regarding NCTE- ITEP 4 year Academic Session- 2019-23.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding NCTE- ITEP 4 year Academic Session- 2019-23 </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS168.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Distribution of Degree<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS165.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Left Student&nbsp; Practical of&nbsp; ODD Semester Exam 2017-18<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS164.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> BOARD OF STUDIES PHYSICAL EDUCATION </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS163.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> BOARD OF STUDIES_PHILOSOPHY_UG<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS162.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> BOARD OF STUDIES_PHILOSOPHY_PG<br /> </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS131.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Requirement of Guest Lecturer faculty in Allahabad State University_615 </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS129.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Requirement of Retired Professor faculty in Allahabad State University_449 </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS106.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding of Back Paper date Extented </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS105.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Missed practical main Examination_2018 </a></li><li><a href='http://182.18.150.93/Circular/WHATSNEWS104.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Renumration bill related to flying, paper sett </a></li><li><a href='#' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px;"><a href="http://asuagadmission.org/">Click for BScAg Entrance exam form 2018</a></span> </a></li>  
                </ul>
  </div>
  
</div>
</div>

</div> 
            
            </div>
            </td>
        </tr>
    </table>
    </div>
    </td></tr>
    <tr >
    <td  width="100%" style=" margin-top:0px;" >
    <div style="width:100%; height:30px ; " >  
    <div class="title" style="width:10%;">Latest News</div>
    <div class="titleNotice" style="width:98.5% " >   
    <div style="z-index: 9999">
      <marquee BEHAVIOR="Left" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()" >                        
          
                <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE116.pdf' target='_blank'  > <i></i> Regarding Office Order(Khandan) </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE115.pdf' target='_blank'  > <i></i> Notice_Exam Centre Change Of Odd Semester Examination_2018-19 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE114.pdf' target='_blank'  > <i></i> Notice- Private Student Exam Centre list Odd Semester 2018_19 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE113.pdf' target='_blank'  > <i></i> Revised Office Order Regarding Exam Centre list Odd Semester 2018-19 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE112.pdf' target='_blank'  > <i></i> Revised Examination Scheme of ODD Semester Exam 2018-19 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE107.pdf' target='_blank'  > <i></i> Notice-Letter Regarding Back Form Open LLB & BALLB I Semester </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE105.pdf' target='_blank'  > <i></i> Invitation Letter for First Convocation 08 Dec 2018 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/Regarding NCTE- ITEP 4 year Academic Session- 2019-23.pdf' target='_blank'  > <i></i> Regarding NCTE- ITEP 4 year Academic Session- 2019-23 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE102.pdf' target='_blank'  > <i></i> Letter Regarding Distribution of Degree </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE98.pdf' target='_blank'  > <i></i> BOARD OF STUDIES_PHILOSOPHY_PG </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE97.pdf' target='_blank'  > <i></i> BOARD OF STUDIES_PHILOSOPHY_UG </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE66.pdf' target='_blank'  > <i></i> Requirement of Guest Lecturer faculty in Allahabad State University_615 </a> ,  <i class='fa fa-angle-double-right1'></i>  <a href='http://182.18.150.93/Circular/ASUHEADNOTICE65.pdf' target='_blank'  > <i></i>  Requirement of Retired Professor faculty in Allahabad State University_449  </a></marquee>
           </div>
       </div>
    
    </div>
   
    </td>
    </tr>
     
     <tr>
        <td style="width:100%" >
        <div style="height:100px;width:100%;background-color:#f7fbf7; margin-top:7px; " >
       
         <table width="100%" cellpadding="0px" cellspacing="0px" style=" text-align:center;padding-top:8px;padding-left:40px;padding-right:0px; " >
         <tr>
       
         <td width="25%"> <a href="http://182.18.150.93/aldonline/Admission.aspx" class="top_link1" title="ADMISSION"><div class="but"><label >ADMISSION</label> </div></a></td>
         <td width="25%"> <a href="http://182.18.150.93/ColLogin.aspx" class="top_link2" title="COLLEGE LOGIN"><div class="but"><label >COLLEGE LOGIN</label> </div></a></td>
         <td width="25%"> <a href="http://182.18.150.93/ASU_All_Results.aspx" class="top_link3" title="RESULT"><div class="but"><label >RESULT</label> </div></a></td>
         <td width="25%"> <a href="Image_Gallery.html" class="top_link4" title="GALLERY"><div class="but"><label >GALLERY</label> </div></a></td>
        
         </tr>
         </table>
       
         </div>
         </td>
     </tr>
    
    <tr >
        <td style="width:100%;" >
   
        <div style="height:460px; margin-top:0px;width:100%; border-top:1px solid #cfcac5;background-color:#f3f1ec;" >
        <table width="100%" cellpadding="0px" cellspacing="30px" style="padding-top:10px;padding-left:10px;padding-right:10px;" >
        <tr>
      
        <td width="33%"  valign="top"    >
        <div class="popup" style="width:100%" >
      <div class="text"><b>Examination Notice</b></div>

<div class="vticker">
 
  <div id="MyDivName1" class="flexcroll1" style=" overflow:auto;height:320px;  ">
 
	  <ul >
                      <li><a href='http://182.18.150.93/Circular/NOTI126.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice_Exam Centre Change Of Odd Semester Examination_2018-19<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI125.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px; font-weight: bold;">Notice- Private Student Exam Centre list Odd Semester 2018_19</span> </a></li><li><a href='http://182.18.150.93/Circular/NOTI124.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px; font-weight: bold;">Revised Office Order Regarding Exam Centre list Odd Semester 2018-19</span> </a></li><li><a href='http://182.18.150.93/Circular/NOTI123.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> <span style="font-size: 13.3333px;">Revised Examination Scheme of ODD Semester Exam 2018-19</span> </a></li><li><a href='http://182.18.150.93/Circular/NOTI108.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Online Registration form Open of Graduate &amp; Under Graduate Academic year-2018-19&nbsp; date Extended </a></li><li><a href='http://182.18.150.93/Circular/NOTI107.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Registration Form Open BED Exam </a></li><li><a href='http://182.18.150.93/Circular/NOTI96.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding of Back Paper date Extented </a></li><li><a href='http://182.18.150.93/Circular/NOTI95.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Missed practical main Examination_2018 </a></li><li><a href='http://182.18.150.93/Circular/NOTI94.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Renumration bill related to flying, paper sett </a></li><li><a href='http://182.18.150.93/Circular/NOTI91.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> YUVA MAHOTSAV </a></li><li><a href='http://182.18.150.93/Circular/NOTI85.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding Letter of BAMS &amp; BUMS Exam schedule &amp; Centre List<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI70.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding LLB Fifth Paper Examination(Viva_Practical)<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI68.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding entrance exam date 30-06-2018<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI64.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> BED &amp; MED Back Paper &amp; promoted rules </a></li><li><a href='http://182.18.150.93/Circular/NOTI62.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF M.LIB COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI61.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF M.Ed COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI60.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF L.L.B COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI59.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.Sc (HOME SCIENCE) COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI58.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.P.Ed COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI57.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.LIB COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI56.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.C.A COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI55.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.B.A COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI54.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NAME OF B.A L.L.B COLLEGE AFFILIATED BY ALLAHABAD STATE UNIVERSITY </a></li><li><a href='http://182.18.150.93/Circular/NOTI52.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Private student center list even semester exam-2018 </a></li><li><a href='http://182.18.150.93/Circular/NOTI49.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> REVISED EXAMINATION SCHEME OF EVEN (II &amp; IV) SEMESTER 2018 </a></li><li><a href='http://182.18.150.93/Circular/NOTI44.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding BScAg entrance form submission<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI40.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding entrance exam form submission date extended 2018<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI39.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> PRESS VIGYAPTI REGARDING RESULT LIVE ON NET OF BA-II<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI36.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Academic Calendar 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/NOTI32.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> EXAMINATION FORM FEE DETAILS_2017-18<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI29.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Minimum qualification regarding entrance form submission 2018<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI28.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> ADMISSION NOTICE 2018<br /> </a></li><li><a href='http://182.18.150.93/Circular/NOTI10.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> OFFICE ORDER REGARDING CHANGE EXAM CENTRE </a></li>  
        </ul>
  </div>
    
</div>

</div>
</td>

 <td width="34%"  align="center"  valign="top"   >
     <div style="width:100%; position: relative;z-index: 10;"  >
      <div class="box effect6"  >
    
       <span class="main-title"  ><h2>Messages</h2></span>
     
       <ol style=" line-height:25px; list-style:none;   ">
       <li>&nbsp;</li>
       <li><a href="msg_ch.html"><i class="fa fa-angle-double-right"></i> माननीय श्री राम नाईक , राज्यपाल उत्तर प्रदेश एवं कुलाधिपति राज्य विश्वविद्यालय का संदेश</a></li>
       <li>&nbsp;</li>
       <li><a href="msg_vc.html"><i class="fa fa-angle-double-right"></i> From the Desk of Vice-Chancellor</a></li>
       <li>&nbsp;</li>
     
       <li>&nbsp;</li>
       
       
       </ol>
          
    
       
      </div>  
       </div>
  </td>


       <td width="33%"  valign="top"   >
        <div class="popup1" style="width:100%"  >
      <div class="text1"><b>Circular</b></div>

<div id="divnews2"  class="vticker1" >

<div id="MyDivName2" class="flexcroll2" style=" overflow:auto;height:320px;  ">
		<ul >
                      <li><a href='http://182.18.150.93/Circular/CIR5547.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding Office Order(Khandan) </a></li><li><a href='http://182.18.150.93/Circular/CIR5516.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Winter Vocation </a></li><li><a href='http://182.18.150.93/Circular/CIR5404.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice- Private Student Exam Centre list Odd Semester 2018_19 </a></li><li><a href='http://182.18.150.93/Circular/CIR5403.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Revised Office Order Regarding Exam Centre list Odd Semester 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR5396.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Revised Examination Scheme of ODD Semester Exam 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR5367.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice-Letter Regarding Back Form Open LLB & BALLB I Semester </a></li><li><a href='http://182.18.150.93/Circular/CIR5357.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Invitation Letter for First Convocation 08 Dec 2018 </a></li><li><a href='http://182.18.150.93/Circular/Regarding NCTE- ITEP 4 year Academic Session- 2019-23.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding NCTE- ITEP 4 year Academic Session- 2019-23 </a></li><li><a href='http://182.18.150.93/Circular/CIR5273.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Distribution of Degree </a></li><li><a href='http://182.18.150.93/Circular/CIR5248.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Left Student  Practical of  ODD Semester Exam 2017-18 </a></li><li><a href='http://182.18.150.93/Circular/CIR5207.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> परीक्षा केंद्र के लिए प्रारूप </a></li><li><a href='http://182.18.150.93/Circular/CIR4891.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding MCQ- Pattern Question Paper 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR4869.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Even Semester UFM Decision Roll no 2017-18 </a></li><li><a href='http://182.18.150.93/Circular/CIR4867.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Registration Form open UG-I Yr & Semester-I date Extended </a></li><li><a href='http://182.18.150.93/Circular/CIR4866.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Notice- Letter Regarding Registration  form filling Date Extended </a></li><li><a href='http://182.18.150.93/Circular/CIR4865.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Date Extended Registration Form of Ex-Student & Back Paper Exam </a></li><li><a href='http://182.18.150.93/Circular/CIR4864.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Latter Regarding Challan date Extended </a></li><li><a href='http://182.18.150.93/Circular/CIR4862.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Instructions for Exam Centers </a></li><li><a href='http://182.18.150.93/Circular/CIR4861.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Reminder Letter The Consideration of the Social Justice Committee required information Dated-17-11-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4839.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding  Payment of Degree Certificate </a></li><li><a href='http://182.18.150.93/Circular/CIR4808.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Registration form Open date Extended </a></li><li><a href='http://182.18.150.93/Circular/CIR4798.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Reminder Letter The Consideration of the Social Justice Committee required information </a></li><li><a href='http://182.18.150.93/Circular/CIR4791.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter related to yoga place change(29-10-2018) </a></li><li><a href='http://182.18.150.93/Circular/CIR4780.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter Of Lawn Tennis </a></li><li><a href='http://182.18.150.93/Circular/CIR4773.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Councill Letter of Handball Trial </a></li><li><a href='http://182.18.150.93/Circular/CIR4771.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter related to vollyball team selection(22-10-2018) </a></li><li><a href='http://182.18.150.93/Circular/CIR4769.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regrading ODD Semester EX & Back Form Close Date </a></li><li><a href='http://182.18.150.93/Circular/CIR4768.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter of Cricket Team Allahabad State University </a></li><li><a href='http://182.18.150.93/Circular/CIR4767.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter of Kalinga University for Anveshan </a></li><li><a href='http://182.18.150.93/Circular/CIR4760.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding Valmiki Jayanti 2018 (dated 24-10-2018) </a></li><li><a href='http://182.18.150.93/Circular/CIR4759.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter Allahabad State University </a></li><li><a href='http://182.18.150.93/Circular/CIR4758.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter of Allahabad State University Allahabad </a></li><li><a href='http://182.18.150.93/Circular/CIR4756.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding Kerla Flood Donation </a></li><li><a href='http://182.18.150.93/Circular/CIR4755.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Date Extended for Registration Form Filling UG PG & Semester Exam </a></li><li><a href='http://182.18.150.93/Circular/CIR4754.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> University Exam & Other Fee </a></li><li><a href='http://182.18.150.93/Circular/CIR4753.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sport Council Letter of Allahabad State University </a></li><li><a href='http://182.18.150.93/Circular/CIR4743.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter for trial of volleyball, cricket, Kushti </a></li><li><a href='http://182.18.150.93/Circular/CIR4742.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council Letter for Date Change of Kushti </a></li><li><a href='http://182.18.150.93/Circular/CIR4741.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office oder dated 06-10-2018 letter regarding kabbadi trail urg </a></li><li><a href='http://182.18.150.93/Circular/CIR4740.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order dated 06-10-2018 regarding kabbadi trial </a></li><li><a href='http://182.18.150.93/Circular/CIR4732.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Sports Council letter dated 05-10-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4731.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council letter dated 05-10-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4730.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Date Extension for Registration in Professional Courses </a></li><li><a href='http://182.18.150.93/Circular/CIR4729.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Online Registration form Open of Graduate & Under Graduate Academic year-2018-19  date Extended </a></li><li><a href='http://182.18.150.93/Circular/CIR4728.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Registration Form Open BED Exam </a></li><li><a href='http://182.18.150.93/Circular/CIR4724.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Council of Allahabad State University_dated-04-10-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4723.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Coucil Letter Upload in All College Login </a></li><li><a href='http://182.18.150.93/Circular/CIR4706.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Scheme Back Paper UG & PG Special Back Paper-2018.pdf </a></li><li><a href='http://182.18.150.93/Circular/CIR4704.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding Special back Paper of BED date Extended_02-10-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4694.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Enter Collegiate Table Tanis Date change letter 29-09-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4693.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Enter Collegiate Yaga Date change letter 29-09-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4692.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> (Urgent) Letter Regarding Provide Teachers detail Data </a></li><li><a href='http://182.18.150.93/Circular/CIR4691.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Date Extension for Registration in Professional Courses </a></li><li><a href='http://182.18.150.93/Circular/CIR4690.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Date Extension for Registration in Professional Courses </a></li><li><a href='http://182.18.150.93/Circular/CIR4686.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> The Consideration of the Social Justice Committee required information </a></li><li><a href='http://182.18.150.93/Circular/CIR4685.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding Back Paper Result Final Eligible </a></li><li><a href='http://182.18.150.93/Circular/CIR4684.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Reagrding RTI & Scrutiny last date </a></li><li><a href='http://182.18.150.93/Circular/CIR4679.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports letter dated 24-09-2018 for date change </a></li><li><a href='http://182.18.150.93/Circular/CIR4678.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports letter dated 24-09-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4669.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> LETTER REGARDING INC RESULT IN ALL COLLEGE DECLARE RESULT IS ABSENT </a></li><li><a href='http://182.18.150.93/Circular/CIR4667.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regarding Letter of Provide Marks Sheet 2016-18 of Post Graduate </a></li><li><a href='http://182.18.150.93/Circular/CIR4666.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Online Registration form Open of Graduate & Under Graduate Academic year-2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR4656.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Sports Council & Proforma </a></li><li><a href='http://182.18.150.93/Circular/CIR4654.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office Order Regarding Practical Marks Submitted </a></li><li><a href='http://182.18.150.93/Circular/CIR4648.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> REGULAR & PRIVATE STUDENT PRACTICAL EXAM CENTRE AND EXAM DATE DETAILS- 2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4647.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> LETTER REGARNDING FOR GANDHI JAYANTI </a></li><li><a href='http://182.18.150.93/Circular/CIR4646.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding KERLA flood </a></li><li><a href='http://182.18.150.93/Circular/CIR4645.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> REGISTRATION REGARDING EVOLUTION FROM NAAC </a></li><li><a href='http://182.18.150.93/Circular/CIR4643.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Sports Selection Comittee Report Proforma </a></li><li><a href='http://182.18.150.93/Circular/CIR4642.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Student Details Proforma for Sports </a></li><li><a href='http://182.18.150.93/Circular/CIR4636.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Eligiblity Certificate Proforma Inter Collegiate Comprtition For Allahabad State University </a></li><li><a href='http://182.18.150.93/Circular/CIR4635.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> letter proforma for Inter Collegiate Tournament 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR4634.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding sports letter dated 14-09-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR4630.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding cross country selection trial </a></li><li><a href='http://182.18.150.93/Circular/CIR4629.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding meeting of sport council in university campus </a></li><li><a href='http://182.18.150.93/Circular/CIR4563.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> YUTH PARLIAMENT FUNCTION </a></li><li><a href='http://182.18.150.93/Circular/CIR4562.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> RELIEF FUND THIRUVANATHAPURAM (KERLA) </a></li><li><a href='http://182.18.150.93/Circular/CIR4542.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Renumration bill related to flying, paper sett </a></li><li><a href='http://182.18.150.93/Circular/CIR4541.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter regarding of Back Paper date Extented </a></li><li><a href='http://182.18.150.93/Circular/CIR4540.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Regarding of Missed practical main Examination_2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR3345.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> INCOMPLETE RESULT TO BE COMPLETED </a></li><li><a href='http://182.18.150.93/Circular/CIR3210.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Letter Reagarding Instruction for Admission New Session-2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR3191.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Academic calendar  of session 2018-2019 </a></li><li><a href='http://182.18.150.93/Circular/CIR3162.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> office order regarding main examination dated 12-03-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR3152.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Regrding entrance exam date 30-06-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2925.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Fee ordinance letter </a></li><li><a href='http://182.18.150.93/Circular/CIR2868.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding INC result of Ist, IIIrd semester exam-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2855.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Private student center list even semester exam-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2830.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> REVISED EXAMINATION SCHEME OF EVEN (II & IV) SEMESTER  2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2571.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> 1310_REGARDING-DITERMINATION-OF-EXAM-CENTRE-II-IV-SEM-EXAMINATION-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2570.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> 1313_2016-17-BSC-I_BCOM-I-YEAR-KI-MARKSHEET TEEN WORKING DAYS ME PRAPT KAR LIGIYE </a></li><li><a href='http://182.18.150.93/Circular/CIR2569.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> 1311_PRESS-VIGYAPATI-REGARDING-MARKS-OBTAIN-ABOVE-70% IN-PRACTICAL-EXAM </a></li><li><a href='http://182.18.150.93/Circular/CIR2421.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Academic Calendar 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR2355.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> NATIONAL SERVICE SCHEME </a></li><li><a href='http://182.18.150.93/Circular/CIR2324.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> UNIVERSITY SPORTS CALENDAR OF INTER-COLLEGIATE TOURNAMENT 2018-19 </a></li><li><a href='http://182.18.150.93/Circular/CIR2244.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> EXAMINATION FORM FEE DETAILS_2017-18 </a></li><li><a href='http://182.18.150.93/Circular/CIR2154.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> OFFICE ORDER REGARDING FOR PRACTICAL EXAMINER </a></li><li><a href='http://182.18.150.93/Circular/CIR2126.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> OFFICE ORDER REGARDING EXAMINATION FORM SUBMISSION OF EVEN SEMESTER-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR2006.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Adhishuchna regarding student attendance  </a></li><li><a href='http://182.18.150.93/Circular/CIR1988.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> summer vacation letter dated 04-05-2018 </a></li><li><a href='http://182.18.150.93/Circular/CIR1987.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Office order regarding M.A. M.Sc. Mathematics Second Paper Exam Catch 660 (07-05-2018) </a></li><li><a href='http://182.18.150.93/Circular/CIR1986.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> PRESS VIGYAPTI REGARDING RESULT LIVE ON NET OF BCOM-I & II </a></li><li><a href='http://182.18.150.93/Circular/CIR983.pdf' target='_blank' > <i class='fa fa-arrow-right'></i> Official holiday detail for calender year 2018_10-01-2018 </a></li>  
        </ul>
        </div>

</div>

</div>
</td>
        </tr></table>
      

   </div>
   
        </td>
    </tr>

      <tr > <td style="width:100%" >
    
    <div style="background: url(images/AboutUs.jpg) top fixed; height:400px;width:100%" >
   <div  style="width:100%;height:398px;  background-color:rgba(255,255,255,0.6);  border-top:1px solid #cfcac5;border-bottom:1px solid #cfcac5;" >
    <table width="100%" cellpadding="0px" cellspacing="20px"   style="padding-top:25px;padding-left:30px;padding-right:0px;text-align:center;"  >
    <tr>
    <td width="49%" valign="top" >
    <div style="width:100%">
<div class=" about" >
<span class="main-title" ><h1>ABOUT UNIVERSITY</h1></span>
<p>The prime mission of Allahabad State University is to offer integrated approaches for local, regional, national and global opportunities of higher learning, research and engagement to the diverse sets of students' population. The University intends to offers a full range of degree programmes at the Bachelor's, Master's, Doctoral, Post-Doctorals and Professional levels, coupled with the entire domain and scope of research and other creative activities. &nbsp;<a href="Mission_Vision.html">More..</a> </p>
 </div>
   </div>
    </td>
   
    
   <td width="17%" valign="top"   >
   <div class="frame">
   <img   style="  width:170px; padding-bottom:10px; height:190px;" src="<?php echo base_url(); ?>assets/img/chacellor.jpg"   />
   <span> Honourable Chancellor</span>
 <span><h3>Shri Ram Naik</h3></span><br />

 <div  class="bt_more">
 <a href="Chancellor.html" >
 <div class="myButt five">
    <div class="layer">Read More</div>
       Read More
    </div></a>
    </div>

 </div>
   </td>

   <td  width="17%" valign="top" >
    <div class="frame">
   <img   style="  width:170px; padding-bottom:10px; height:190px;" src="<?php echo base_url(); ?>assets/img/yogi.jpg"   />
   <span> Hon’ble Chief Minister of U.P. </span>
 <span><h3>Shri Yogi Adityanath</h3></span><br />

 <div  class="bt_more">
 <a href="CM.html" >
  <div class="myButt five">
    <div class="layer">Read More</div>
       Read More
    </div></a>
    </div>

 </div>
</td>

   <td  width="17%" valign="top">
    <div class="frame">
   <img   style="  width:170px; padding-bottom:10px; height:190px;" src="<?php echo base_url(); ?>assets/img/vc.jpg"   />
   <span> Vice Chancellor</span>
 <span><h3>Prof. Rajendra Prasad</h3></span><br />

 <div  class="bt_more">
 <a href="VC.html" >
  <div class="myButt five">
    <div class="layer">Read More</div>
       Read More
    </div></a>
    </div>

 </div>
  </td>
  
 </tr>
    </table>
    </div>
    </div>
  
    </td></tr>
    <tr > <td style="width:100%">
    
    <div class="ImpLinks"  style="width:100%;background-color:#f3f1ec; height:450px;border-bottom:1px solid #c3bdb7;" >
    <div style=" padding:20px ">
    <span class="main-title" ><h1>STUDENT'S CORNER</h1></span>
        
    <div style="width:100%;padding-top:40px;padding-left:10px;padding-right:10px; ">
    <table width="100%"  style=" text-align:left ; font-size:12px; "  >
    <tr>
    <td width="50%" valign="top" style="border-right:1px solid #c3bdb5;" >
      <!-- 1. <a href="http://182.18.150.93/aldonline/Admission.aspx" target="_blank">Admissions-Apply Online</a><br />-->
    <!--<h7>(For Professional Courses running in Affiliated Colleges)</h7>-->
   <!-- 2. <a href="http://182.18.150.93/aldonline/Admission.aspx" target="_blank">Entrance Examination Result 2017 (Campus)</a><br />-->
   <!--  3. <a href="http://182.18.150.93/aldonline/Aadmit_print.aspx" target="_blank">Admit Card Entrance Examination 2017(M.Ed) </a><br />-->
   <!--  4. <a href="form/M.Ed. Entrance Exam Result 2017-18.pdf" target="_blank">M.Ed. Entrance Examination Result 2017 </a><br />-->
 <!--<a href="form/LETTER NO.49 REGARDING MA AND MCOM PRIVATE STUDENT VIVA EXAM.pdf" target="_blank" style="font-size:9px;" > <strong>NOTICE REGARDING VIVA EXAM 2017-18 </strong></a><img src="<?php echo base_url(); ?>assets/img/new.gif"><br />-->
    
    <ol style="line-height:25px; padding-left:40px; font-weight:bold; "  >
        <li> <a target="_blank" href="http://asuagadmission.org/">Click For BScAg Entrance Exam 
            Form 2018</a> </li>

        <li><a target="_blank" href="http://182.18.150.93/Circular/WHATSNEWS100.pdf"> Back Paper Examination Rule </a></li>
        
        
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_Login_1819_ALLOWED_LLB_BALLB1sem_img.aspx"> Click For BACK PAPER FORM LLB & BALLB 2018-19 SPECIAL PERMISSION  </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li> 
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_LoginPayment_1819_ALLOWED_LLB_BALLB1sem.aspx"> Click For (LLB & BALLB) Back Form Printout / Online Payment If Left Due To Any Reason  </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li> 
        
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_Login_1819.aspx"> Click For Back Examination Form Filling 2018-19 (ODD Sem) </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li> 
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_LoginPayment_1819.aspx"> Click For Back Form Printout / Online Payment If Left Due To Any Reason </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
        
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_Login_1718_PracOdd.aspx"> Click For Back Examination Form Filling 2018-19 (Practical)  </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li> 
        <li><a target="_blank" href="http://182.18.150.93/aldonline/BackFrm_LoginPayment_1718_PracOdd.aspx"> Click For Back Form Printout / Online Payment If Left Due To Any Reason (Practical) </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>

        <!-- <li> <a target="_blank" href="form/bp_important_int2014.pdf"> Back Paper Rule </a> </li>-->
        
        
        

        

        
        
        
        
        

        
        
        
        
        <li><a target="_blank" href="http://182.18.150.93/aldonline/EXFrm_Login_2018.aspx"> Click For EX-STUDENT Examination Form ODD Semester 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li> 
      <li><a target="_blank" href="http://182.18.150.93/aldonline/EXFrm_Login_1718.aspx"> Click For EX-STUDENT Examination Form UG / PG 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      <li><a target="_blank" href="http://182.18.150.93/aldonline/Exfrm_LoginPayment.aspx" > Click For EX-STUDENT Printout / Online Payment If Left Due To Any Reason </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
        
        
   
    </ol>

   
    </td>
    <td width="50%" valign="top">
<!--<h4><a target="_blank" href="http://182.18.150.93/PVT_firstpage.aspx"> PRIVATE REGISTRATION FORM </a></h4>
<h6><a target="_blank" href="http://182.18.150.93/DuplicatePrivateForm_chprint.aspx">Click for Duplicate Challan Prinout of Private registration Form </a></h6>-->
<!--6. <a target="_blank" href="http://182.18.150.93/StuAdmitCarPrivate_Admit.aspx" > Admit Card for Private-I Sem/BACK/EX-student/CAMPUS 2018</a><img src="<?php echo base_url(); ?>assets/img/new.gif"><br />-->
<!--<br /><br /> 7. <a href="http://182.18.150.93/StuAdmitCarBackpaper_Admit.aspx">Back Paper Admit Card link 2016-17</a><img src="<?php echo base_url(); ?>assets/img/new.gif"><br />-->
<!--<a href="http://182.18.150.93/Circular/CIR1134.pdf" target="_blank" style="font-size:11px;" > <strong>REVISED EXAMINATION SCHEME OF ANNUAL COURSES SESSION 2017-18. </strong></a><img src="<?php echo base_url(); ?>assets/img/new.gif"><br />-->

  <ol style="line-height:25px; padding-left:40px;  font-weight:bold;" >  
  		
		<li><h2><a target="_blank" href="http://182.18.150.93/StuAdmitCarPrivate_Admit_1819.aspx" > Admit Card ODD Semester 2018-19(Private/Back/EX-Student) </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></h2></li>

	  <li><a target="_blank" href="http://182.18.150.93/Circular/WHATSNEWS147.pdf">Office Order Regrading ODD Semester EX & Back Form Close Date</a></li>
	  
      <li><a target="_blank" href="http://182.18.150.93/Campus_PG_ISTYr.aspx" > Click For CAMPUS PG Part-I Examination Form 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      <li><a target="_blank" href="http://182.18.150.93/PVT_firstpage_2018.aspx"> Click For PRIVATE Student Examination Form 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      <li><a target="_blank" href="http://182.18.150.93/DuplicatePrivateForm_chprint.aspx"> Click For PRIVATE/CAMPUS UG/PG Part-I Printout / Online Payment If Left Due To Any Reason </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>

      <li><a target="_blank" href="http://182.18.150.93/Campus_PG_ISTYr_ODD18_1SemFailStu.aspx"> Click For PRIVATE Examination Form 1 Semester (Fail Student) 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      <li><a target="_blank" href="http://182.18.150.93/Campus_PG_ISTYr_ODD18_1YearFailStu.aspx"> Click For PRIVATE Examination Form UG PART-I (Fail Student) 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      
      <li><a target="_blank" href="http://182.18.150.93/Campus_PG_ISTYr_ODD18.aspx"> Click For PRIVATE/CAMPUS Examination Form ODD Semester 2018-19</a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      <li><a target="_blank" href="http://182.18.150.93/Campus_PG_ISTYr_OddDuplicate.aspx" > Click For PRIVATE/CAMPUS Printout / Online Payment If Left Due To Any Reason </a><img src="<?php echo base_url(); ?>assets/img/new.gif"></li>
      
      
      
      

      


      
      
      
      
      

      

      
      
      

      

       
  
                  
        
<?php $this->load->view("footer") ?>

   