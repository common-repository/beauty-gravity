<?php
$SIBG_free_tooltip = "
   .gf_tooltip_body{
    text-align: center;
    font-weight: 500;
    font-size: 13px;
    margin-left: 7px;
    position: relative;
    display: inline-block;
	line-height: 1 !important;
}
.gf_tooltip_body>span{
    line-height: 1.1 !important;
    padding: 5px;
}
.gf_tooltip_body>i{
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
}
.BG_Icon .gf_tooltip_body>span{
	z-index:1 !important;	
}
.BG_small_size .BG_Icon .gf_tooltip_body>i{
    font-size: 14px !important;
	width: 16px;
    height: 16px;
	align-items:center !important;
	justify-content:center !important;
	z-index:3 !important;
	display:flex !important;
}
.BG_small_size .gf_tooltip_body>span{
    font-size: 13px !important;
}


.BG_medium_size .BG_Icon .gf_tooltip_body>i{
    font-size: 16px !important;
	width: 20px;
    height: 20px;
	align-items:center !important;
	justify-content:center !important;
	z-index:3 !important;
	display:flex !important;
}
.BG_medium_size .gf_tooltip_body>span{
    font-size: 15px !important;
}

.BG_large_size .BG_Icon .gf_tooltip_body>i{
    font-size: 19px !important;
	width: 22px;
    height: 22px;
	align-items:center !important;
	justify-content:center !important;
	z-index:2 !important;
	display:flex !important;
}
.BG_large_size .gf_tooltip_body>span{
    font-size: 17px !important;
}

.BG_xlarge_size .BG_Icon .gf_tooltip_body>i{
    font-size: 22px !important;
	width: 25px;
    height: 25px;
	align-items:center !important;
	justify-content:center !important;
	z-index:2 !important;
	display:flex !important;
}
.BG_xlarge_size .gf_tooltip_body>span{
    font-size: 20px !important;
}
.tooltip-pos.BG_Hover .gf_tooltip_body{
    z-index: 1 !important;
    top: 0 !important;
    border: 0;
}
.gfield_checkbox>li,.gfield_radio>li{
    overflow: visible !important;
}

.BG_Hover:not(.BG_Button) .gf_tooltip_body>i{
    width: 0;
    position: unset;
}
.BG_Hover .gf_tooltip_body>i:before{
    content: '' !important;
}
.BG_Hover{
    display: flex;
    flex-direction: column;
    align-items: start;
}
.BG_Hover:not(.BG_Button)>li{
    display: inline-block;
    position: relative;
    overflow: visible !important;
    z-index: 1 ;
}
.BG_Hover.BG_Button>li{
    z-index: 2 !important;
    transition: z-index 0.3s linear;
}
.BG_Hover>li>label{
    display: inline !important;
    z-index: 2 !important;
}
.BG_Hover .gf_tooltip_body{
    display: inline-block;
    border: dashed #333;
    border-width: 0 0 1px 0;
    position: absolute;
    right: 0;
    z-index: -1 !important;
    margin: 0;
}
.BG_Hover:not(.BG_Button) .gf_tooltip_body{
    height: 80%;
    top: 3px;
}
.BG_Hover.BG_Button .gf_tooltip_body{
    height: 100%;
    top: 0;
}
.BG_Microsoft .BG_Hover.BG_Button .gf_tooltip_body{
    width: calc(100% - 5px);
    height: 100%;
    left: 0;
    border-bottom: 0 !important;
}
.BG_Hover.BG_Button>li:hover,.BG_Icon.BG_Button>li:hover{
    z-index: 3 !important;
    transition: z-index 0s;
}
.BG_Microsoft .BG_Hover.BG_toggle .gf_tooltip_body{

    width: calc(100% - 45px);
}
.BG_Microsoft .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 25px);
}
.BG_Cute .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 36px);
}
.BG_Cute .BG_Hover.BG_toggle .gf_tooltip_body{
    width: calc(100% - 45px);
}
.BG_Android .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 25px);
}
.BG_Android .BG_Hover.BG_toggle .gf_tooltip_body{
    width: calc(100% - 47px);
}
.BG_Bootstrap .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 26px);
}
.BG_Bootstrap .BG_Hover.BG_toggle .gf_tooltip_body{
    width: calc(100% - 36px);
}
.BG_sharp .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 28px);
}
.BG_sharp .BG_Hover.BG_toggle .gf_tooltip_body{
    width: calc(100% - 48px);
}



.main_label.BG_Hover{
    display: inline-block !important;
    position: relative;
    z-index: 1;
}
.main_label.BG_Hover{
    margin: 0 !important;
}
.main_label.BG_Hover .gf_tooltip_body{
    width: 100%;
}

/*Material tooltip*/
.BG_Material .BG_Hover.BG_default .gf_tooltip_body,
.BG_Material_out .BG_Hover.BG_default .gf_tooltip_body,
.BG_Material_out_rnd .BG_Hover.BG_default .gf_tooltip_body{
    width: calc(100% - 35px);
}
.BG_Material .BG_Hover.BG_toggle .gf_tooltip_body,
.BG_Material_out .BG_Hover.BG_toggle .gf_tooltip_body,
.BG_Material_out_rnd .BG_Hover.BG_toggle .gf_tooltip_body{
    width: calc(100% - 45px);
}
.BG_Material .BG_Hover.BG_Button .gf_tooltip_body,
.BG_Material_out .BG_Hover.BG_Button .gf_tooltip_body,
.BG_Material_out_rnd .BG_Hover.BG_Button .gf_tooltip_body{
    width: 100%;
    border: 0 !important;
}

.BG_Hover.BG_Button

.BG_toggle.BG_Hover>li>label{
    display: flex !important;
    flex-direction: row-reverse;
    max-width: unset !important;
}

.gfield_checkbox>li>label,.gfield_label{
    z-index: 1;
}
.gfield_checkbox>li>.gf_tooltip_body>i:hover~span,.gfield_label~.gf_tooltip_body>i:hover~span{
    z-index: 2;
    transition: z-index 0.3s linear;
}

.bg_default_theme .BG_Hover .gf_tooltip_body{
    width: 100% !important;
}

.BG_Material .ginput_container .gf_tooltip_body{
    margin: 0 !important;
}
.material-tooltip{
    display: inline-block;
    position: absolute;
    left: -5px;
    top: -5px;
}
.material-tooltip>.gf_tooltip_body{
    width: 100% !important;
    height: 100% !important;
}
.BG_Material input[type=text],
.BG_Material select,
.BG_Material textarea{
    z-index: 0 !important;
    position: relative !important;
}

.BG_Material_out input[type=text],
.BG_Material_out select,
.BG_Material_out textarea,
.BG_Material_out_rnd input[type=text],
.BG_Material_out_rnd select,
.BG_Material_out_rnd textarea{
    z-index: 1 !important;
    position: relative !important;
}

/*region tooltip_1 style*/
.BG_tooltip_1.Dark>span{
    background-color: black;
    color: white;
}
.BG_tooltip_1.Light>span{
    background-color: white;
    color: black;
}

.BG_tooltip_1>span{
    opacity: 0;
    position: absolute;
    width: max-content;
    font-size: 13px;
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1>span:after{
    content: '';
    display: inline-block;
    border:5px solid;
    position: absolute;
    transition: all 0.3s ease-in-out;
}


.BG_tooltip_1[data-position='T']>span{
    left: 50%;
    bottom: 100%;
    transform: translateX(-50%);
}
.BG_Icon .BG_tooltip_1[data-position='T'] > i:hover ~ span, .BG_Hover label:hover~.BG_tooltip_1[data-position='T']>span {
    opacity: 1;
    bottom: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='TR']>span{
    left: calc(100% - 20px);
    bottom: 100%;
}
.BG_Icon .BG_tooltip_1[data-position='TR'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='TR'] > span {
    opacity: 1;
    bottom: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='R']>span{
    left: 100%;
    bottom: 50%;
    transform: translateY(50%);
}
.BG_Icon .BG_tooltip_1[data-position='R'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='R'] > span {
    opacity: 1;
    left: calc(100% + 10px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='BR']>span{
    left: calc(100% - 20px);
    top: 100%;
}
.BG_Icon .BG_tooltip_1[data-position='BR'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='BR'] > span {
    opacity: 1;
    top: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='B']>span{
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
}
.BG_Icon .BG_tooltip_1[data-position='B'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='B'] > span {
    opacity: 1;
    top: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}


.BG_tooltip_1[data-position='BL']>span{
    right:calc(100% - 22px);
    top: 100%;
}
.BG_Icon .BG_tooltip_1[data-position='BL'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='BL'] > span {
    opacity: 1;
    top: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='L']>span{
    right: 100%;
    top: 50%;
    transform: translateY(-50%);
}
.BG_Icon .BG_tooltip_1[data-position='L'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='L'] > span {
    opacity: 1;
    right: calc(100% + 10px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1[data-position='TL']>span{
    right: calc(100% - 22px);
    bottom: 100%;
}
.BG_Icon .BG_tooltip_1[data-position='TL'] > i:hover ~ span, .BG_Hover  label:hover ~ .BG_tooltip_1[data-position='TL'] > span {
    opacity: 1;
    bottom: calc(100% + 5px);
    transition: all 0.3s ease-in-out;
}

.BG_tooltip_1.Dark[data-position='TL']>span:after,.BG_tooltip_1.Dark[data-position='T']>span:after,.BG_tooltip_1.Dark[data-position='TR']>span:after{
    border-color: black transparent transparent transparent;
}
.BG_tooltip_1.Light[data-position='TL']>span:after,.BG_tooltip_1.Light[data-position='T']>span:after,.BG_tooltip_1.Light[data-position='TR']>span:after{
    border-color: white transparent transparent transparent;
}



.BG_tooltip_1.Dark[data-position='R']>span:after{
    border-color: transparent black transparent transparent;
}
.BG_tooltip_1.Light[data-position='R']>span:after{
    border-color: transparent white transparent transparent;
}



.BG_tooltip_1.Dark[data-position='BL']>span:after,.BG_tooltip_1.Dark[data-position='B']>span:after,.BG_tooltip_1.Dark[data-position='BR']>span:after{
    border-color: transparent transparent black transparent;
}
.BG_tooltip_1.Light[data-position='BL']>span:after,.BG_tooltip_1.Light[data-position='B']>span:after,.BG_tooltip_1.Light[data-position='BR']>span:after{
    border-color: transparent transparent white transparent;
}


.BG_tooltip_1.Dark[data-position='L']>span:after{
    border-color: transparent transparent transparent black;
}
.BG_tooltip_1.Light[data-position='L']>span:after{
    border-color: transparent transparent transparent white;
}


.BG_tooltip_1[data-position='T']>span:after{
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='TR']>span:after{
    top: 100%;
    left: 5px;
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='R']>span:after{
    top: 50%;
    right: 100%;
    transform: translateY(-50%);
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='BR']>span:after{
    bottom: 100%;
    left: 5px;
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='B']>span:after{
    left: 50%;
    bottom: 100%;
    transform: translateX(-50%);
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='BL']>span:after{
    right: 5px;
    bottom: 100%;
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='L']>span:after{
    left: 100%;
    top: 50%;
    transform: translateY(-50%);
    transition: all 0.3s ease-in-out;
}
.BG_tooltip_1[data-position='TL']>span:after{
    right: 5px;
    top: 100%;
    transition: all 0.3s ease-in-out;
}
.BG_Hover:not(.BG_Button)>div {
    position: relative;
    z-index: 1;
}
/*endregion*/ " ;


