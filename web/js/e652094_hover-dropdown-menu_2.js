(function($){var menuTrees=[],IE=!!window.createPopup,mouse=false,mouseDetectionEnabled=false;function initMouseDetection(disable){var eNS=".smartmenus_mouse";if(!mouseDetectionEnabled&&!disable){var firstTime=true,lastMove=null;$(document).bind(getEventsNS([["mousemove",function(e){var thisMove={x:e.pageX,y:e.pageY,timeStamp:(new Date).getTime()};if(lastMove){var deltaX=Math.abs(lastMove.x-thisMove.x),deltaY=Math.abs(lastMove.y-thisMove.y);if((deltaX>0||deltaY>0)&&deltaX<=2&&deltaY<=2&&thisMove.timeStamp-lastMove.timeStamp<=300){mouse=true;if(firstTime){var $a=$(e.target).closest("a");if($a.is("a")){$.each(menuTrees,function(){if($.contains(this.$root[0],$a[0])){this.itemEnter({currentTarget:$a[0]});return false}})}firstTime=false}}}lastMove=thisMove}],[touchEvents()?"touchstart":"pointerover pointermove pointerout MSPointerOver MSPointerMove MSPointerOut",function(e){if(isTouchEvent(e.originalEvent)){mouse=false}}]],eNS));mouseDetectionEnabled=true}else if(mouseDetectionEnabled&&disable){$(document).unbind(eNS);mouseDetectionEnabled=false}}function isTouchEvent(e){return!/^(4|mouse)$/.test(e.pointerType)}function touchEvents(){return"ontouchstart"in window}function getEventsNS(defArr,eNS){if(!eNS){eNS=""}var obj={};$.each(defArr,function(index,value){obj[value[0].split(" ").join(eNS+" ")+eNS]=value[1]});return obj}$.SmartMenus=function(elm,options){this.$root=$(elm);this.opts=options;this.rootId="";this.$subArrow=null;this.subMenus=[];this.activatedItems=[];this.visibleSubMenus=[];this.showTimeout=0;this.hideTimeout=0;this.scrollTimeout=0;this.clickActivated=false;this.zIndexInc=0;this.$firstLink=null;this.$firstSub=null;this.disabled=false;this.$disableOverlay=null;this.isTouchScrolling=false;this.init()};$.extend($.SmartMenus,{hideAll:function(){$.each(menuTrees,function(){this.menuHideAll()})},destroy:function(){while(menuTrees.length){menuTrees[0].destroy()}initMouseDetection(true)},prototype:{init:function(refresh){var self=this;if(!refresh){menuTrees.push(this);this.rootId=((new Date).getTime()+Math.random()+"").replace(/\D/g,"");if(this.$root.hasClass("sm-rtl")){this.opts.rightToLeftSubMenus=true}var eNS=".smartmenus";this.$root.data("smartmenus",this).attr("data-smartmenus-id",this.rootId).dataSM("level",1).bind(getEventsNS([["mouseover focusin",$.proxy(this.rootOver,this)],["mouseout focusout",$.proxy(this.rootOut,this)]],eNS)).delegate("a",getEventsNS([["mouseenter",$.proxy(this.itemEnter,this)],["mouseleave",$.proxy(this.itemLeave,this)],["mousedown",$.proxy(this.itemDown,this)],["focus",$.proxy(this.itemFocus,this)],["blur",$.proxy(this.itemBlur,this)],["click",$.proxy(this.itemClick,this)],["touchend",$.proxy(this.itemTouchEnd,this)]],eNS));eNS+=this.rootId;if(this.opts.hideOnClick){$(document).bind(getEventsNS([["touchstart",$.proxy(this.docTouchStart,this)],["touchmove",$.proxy(this.docTouchMove,this)],["touchend",$.proxy(this.docTouchEnd,this)],["click",$.proxy(this.docClick,this)]],eNS))}$(window).bind(getEventsNS([["resize orientationchange",$.proxy(this.winResize,this)]],eNS));if(this.opts.subIndicators){this.$subArrow=$("<span/>").addClass("sub-arrow");if(this.opts.subIndicatorsText){this.$subArrow.html(this.opts.subIndicatorsText)}}initMouseDetection()}this.$firstSub=this.$root.find("ul").each(function(){self.menuInit($(this))}).eq(0);this.$firstLink=this.$root.find("a").eq(0);if(this.opts.markCurrentItem){var reDefaultDoc=/(index|default)\.[^#\?\/]*/i,reHash=/#.*/,locHref=window.location.href.replace(reDefaultDoc,""),locHrefNoHash=locHref.replace(reHash,"");this.$root.find("a").each(function(){var href=this.href.replace(reDefaultDoc,""),$this=$(this);if(href==locHref||href==locHrefNoHash){$this.addClass("current");if(self.opts.markCurrentTree){$this.parent().parentsUntil("[data-smartmenus-id]","li").children("a").addClass("current")}}})}},destroy:function(){this.menuHideAll();var eNS=".smartmenus";this.$root.removeData("smartmenus").removeAttr("data-smartmenus-id").removeDataSM("level").unbind(eNS).undelegate(eNS);eNS+=this.rootId;$(document).unbind(eNS);$(window).unbind(eNS);if(this.opts.subIndicators){this.$subArrow=null}var self=this;$.each(this.subMenus,function(){if(this.hasClass("mega-menu")){this.find("ul").removeDataSM("in-mega")}if(this.dataSM("shown-before")){if(self.opts.subMenusMinWidth||self.opts.subMenusMaxWidth){this.css({width:"",minWidth:"",maxWidth:""}).removeClass("sm-nowrap")}if(this.dataSM("scroll-arrows")){this.dataSM("scroll-arrows").remove()}this.css({zIndex:"",top:"",left:"",marginLeft:"",marginTop:"",display:""})}if(self.opts.subIndicators){this.dataSM("parent-a").removeClass("has-submenu").children("span.sub-arrow").remove()}this.removeDataSM("shown-before").removeDataSM("ie-shim").removeDataSM("scroll-arrows").removeDataSM("parent-a").removeDataSM("level").removeDataSM("beforefirstshowfired").parent().removeDataSM("sub")});if(this.opts.markCurrentItem){this.$root.find("a.current").removeClass("current")}this.$root=null;this.$firstLink=null;this.$firstSub=null;if(this.$disableOverlay){this.$disableOverlay.remove();this.$disableOverlay=null}menuTrees.splice($.inArray(this,menuTrees),1)},disable:function(noOverlay){if(!this.disabled){this.menuHideAll();if(!noOverlay&&!this.opts.isPopup&&this.$root.is(":visible")){var pos=this.$root.offset();this.$disableOverlay=$('<div class="sm-jquery-disable-overlay"/>').css({position:"absolute",top:pos.top,left:pos.left,width:this.$root.outerWidth(),height:this.$root.outerHeight(),zIndex:this.getStartZIndex(true),opacity:0}).appendTo(document.body)}this.disabled=true}},docClick:function(e){if(this.isTouchScrolling){this.isTouchScrolling=false;return}if(this.visibleSubMenus.length&&!$.contains(this.$root[0],e.target)||$(e.target).is("a")){this.menuHideAll()}},docTouchEnd:function(e){if(!this.lastTouch){return}if(this.visibleSubMenus.length&&(this.lastTouch.x2===undefined||this.lastTouch.x1==this.lastTouch.x2)&&(this.lastTouch.y2===undefined||this.lastTouch.y1==this.lastTouch.y2)&&(!this.lastTouch.target||!$.contains(this.$root[0],this.lastTouch.target))){if(this.hideTimeout){clearTimeout(this.hideTimeout);this.hideTimeout=0}var self=this;this.hideTimeout=setTimeout(function(){self.menuHideAll()},350)}this.lastTouch=null},docTouchMove:function(e){if(!this.lastTouch){return}var touchPoint=e.originalEvent.touches[0];this.lastTouch.x2=touchPoint.pageX;this.lastTouch.y2=touchPoint.pageY},docTouchStart:function(e){var touchPoint=e.originalEvent.touches[0];this.lastTouch={x1:touchPoint.pageX,y1:touchPoint.pageY,target:touchPoint.target}},enable:function(){if(this.disabled){if(this.$disableOverlay){this.$disableOverlay.remove();this.$disableOverlay=null}this.disabled=false}},getClosestMenu:function(elm){var $closestMenu=$(elm).closest("ul");while($closestMenu.dataSM("in-mega")){$closestMenu=$closestMenu.parent().closest("ul")}return $closestMenu[0]||null},getHeight:function($elm){return this.getOffset($elm,true)},getOffset:function($elm,height){var old;if($elm.css("display")=="none"){old={position:$elm[0].style.position,visibility:$elm[0].style.visibility};$elm.css({position:"absolute",visibility:"hidden"}).show()}var box=$elm[0].getBoundingClientRect&&$elm[0].getBoundingClientRect(),val=box&&(height?box.height||box.bottom-box.top:box.width||box.right-box.left);if(!val&&val!==0){val=height?$elm[0].offsetHeight:$elm[0].offsetWidth}if(old){$elm.hide().css(old)}return val},getStartZIndex:function(root){var zIndex=parseInt(this[root?"$root":"$firstSub"].css("z-index"));if(!root&&isNaN(zIndex)){zIndex=parseInt(this.$root.css("z-index"))}return!isNaN(zIndex)?zIndex:1},getTouchPoint:function(e){return e.touches&&e.touches[0]||e.changedTouches&&e.changedTouches[0]||e},getViewport:function(height){var name=height?"Height":"Width",val=document.documentElement["client"+name],val2=window["inner"+name];if(val2){val=Math.min(val,val2)}return val},getViewportHeight:function(){return this.getViewport(true)},getViewportWidth:function(){return this.getViewport()},getWidth:function($elm){return this.getOffset($elm)},handleEvents:function(){return!this.disabled&&this.isCSSOn()},handleItemEvents:function($a){return this.handleEvents()&&!this.isLinkInMegaMenu($a)},isCollapsible:function(){return this.$firstSub.css("position")=="static"},isCSSOn:function(){return this.$firstLink.css("display")=="block"},isFixed:function(){var isFixed=this.$root.css("position")=="fixed";if(!isFixed){this.$root.parentsUntil("body").each(function(){if($(this).css("position")=="fixed"){isFixed=true;return false}})}return isFixed},isLinkInMegaMenu:function($a){return!$a.parent().parent().dataSM("level")},isTouchMode:function(){return!mouse||this.isCollapsible()},itemActivate:function($a){var $li=$a.parent(),$ul=$li.parent(),level=$ul.dataSM("level");if(level>1&&(!this.activatedItems[level-2]||this.activatedItems[level-2][0]!=$ul.dataSM("parent-a")[0])){var self=this;$($ul.parentsUntil("[data-smartmenus-id]","ul").get().reverse()).add($ul).each(function(){self.itemActivate($(this).dataSM("parent-a"))})}if(this.visibleSubMenus.length>level){this.menuHideSubMenus(!this.activatedItems[level-1]||this.activatedItems[level-1][0]!=$a[0]?level-1:level)}this.activatedItems[level-1]=$a;this.visibleSubMenus[level-1]=$ul;if(this.$root.triggerHandler("activate.smapi",$a[0])===false){return}var $sub=$li.dataSM("sub");if($sub&&(this.isTouchMode()||(!this.opts.showOnClick||this.clickActivated))){this.menuShow($sub)}},itemBlur:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}this.$root.triggerHandler("blur.smapi",$a[0])},itemClick:function(e){if(this.isTouchScrolling){this.isTouchScrolling=false;e.stopPropagation();return false}var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}$a.removeDataSM("mousedown");if(this.$root.triggerHandler("click.smapi",$a[0])===false){return false}var $sub=$a.parent().dataSM("sub");if(this.isTouchMode()){if($a.dataSM("href")){$a.attr("href",$a.dataSM("href")).removeDataSM("href")}if($sub&&(!$sub.dataSM("shown-before")||!$sub.is(":visible"))){this.itemActivate($a);if($sub.is(":visible")){return false}}}else if(this.opts.showOnClick&&$a.parent().parent().dataSM("level")==1&&$sub){this.clickActivated=true;this.menuShow($sub);return false}if($a.hasClass("disabled")){return false}if(this.$root.triggerHandler("select.smapi",$a[0])===false){return false}},itemDown:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}$a.dataSM("mousedown",true)},itemEnter:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}if(!this.isTouchMode()){if(this.showTimeout){clearTimeout(this.showTimeout);this.showTimeout=0}var self=this;this.showTimeout=setTimeout(function(){self.itemActivate($a)},this.opts.showOnClick&&$a.parent().parent().dataSM("level")==1?1:this.opts.showTimeout)}this.$root.triggerHandler("mouseenter.smapi",$a[0])},itemFocus:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}if((!this.isTouchMode()||!$a.dataSM("mousedown"))&&(!this.activatedItems.length||this.activatedItems[this.activatedItems.length-1][0]!=$a[0])){this.itemActivate($a)}this.$root.triggerHandler("focus.smapi",$a[0])},itemLeave:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}if(!this.isTouchMode()){if($a[0].blur){$a[0].blur()}if(this.showTimeout){clearTimeout(this.showTimeout);this.showTimeout=0}}$a.removeDataSM("mousedown");this.$root.triggerHandler("mouseleave.smapi",$a[0])},itemTouchEnd:function(e){var $a=$(e.currentTarget);if(!this.handleItemEvents($a)){return}var $sub=$a.parent().dataSM("sub");if($a.attr("href").charAt(0)!=="#"&&$sub&&(!$sub.dataSM("shown-before")||!$sub.is(":visible"))){$a.dataSM("href",$a.attr("href"));$a.attr("href","#")}},menuFixLayout:function($ul){if(!$ul.dataSM("shown-before")){$ul.hide().dataSM("shown-before",true)}},menuHide:function($sub){if(this.$root.triggerHandler("beforehide.smapi",$sub[0])===false){return}$sub.stop(true,true);if($sub.is(":visible")){var complete=function(){$sub.css("z-index","")};if(this.isCollapsible()){if(this.opts.collapsibleHideFunction){this.opts.collapsibleHideFunction.call(this,$sub,complete)}else{$sub.hide(this.opts.collapsibleHideDuration,complete)}}else{if(this.opts.hideFunction){this.opts.hideFunction.call(this,$sub,complete)}else{$sub.hide(this.opts.hideDuration,complete)}}if($sub.dataSM("ie-shim")){$sub.dataSM("ie-shim").remove()}if($sub.dataSM("scroll")){this.menuScrollStop($sub);$sub.css({"touch-action":"","-ms-touch-action":""}).unbind(".smartmenus_scroll").removeDataSM("scroll").dataSM("scroll-arrows").hide()}$sub.dataSM("parent-a").removeClass("highlighted");var level=$sub.dataSM("level");this.activatedItems.splice(level-1,1);this.visibleSubMenus.splice(level-1,1);this.$root.triggerHandler("hide.smapi",$sub[0])}},menuHideAll:function(){if(this.showTimeout){clearTimeout(this.showTimeout);this.showTimeout=0}this.menuHideSubMenus();if(this.opts.isPopup){this.$root.stop(true,true);if(this.$root.is(":visible")){if(this.opts.hideFunction){this.opts.hideFunction.call(this,this.$root)}else{this.$root.hide(this.opts.hideDuration)}if(this.$root.dataSM("ie-shim")){this.$root.dataSM("ie-shim").remove()}}}this.activatedItems=[];this.visibleSubMenus=[];this.clickActivated=false;this.zIndexInc=0},menuHideSubMenus:function(level){if(!level)level=0;for(var i=this.visibleSubMenus.length-1;i>level;i--){this.menuHide(this.visibleSubMenus[i])}},menuIframeShim:function($ul){if(IE&&this.opts.overlapControlsInIE&&!$ul.dataSM("ie-shim")){$ul.dataSM("ie-shim",$("<iframe/>").attr({src:"javascript:0",tabindex:-9}).css({position:"absolute",top:"auto",left:"0",opacity:0,border:"0"}))}},menuInit:function($ul){if(!$ul.dataSM("in-mega")){this.subMenus.push($ul);if($ul.hasClass("mega-menu")){$ul.find("ul").dataSM("in-mega",true)}var level=2,par=$ul[0];while((par=par.parentNode.parentNode)!=this.$root[0]){level++}$ul.dataSM("parent-a",$ul.prevAll("a").eq(-1)).dataSM("level",level).parent().dataSM("sub",$ul);if(this.opts.subIndicators){$ul.dataSM("parent-a").addClass("has-submenu")[this.opts.subIndicatorsPos](this.$subArrow.clone())}}},menuPosition:function($sub){var $a=$sub.dataSM("parent-a"),$ul=$sub.parent().parent(),level=$sub.dataSM("level"),subW=this.getWidth($sub),subH=this.getHeight($sub),itemOffset=$a.offset(),itemX=itemOffset.left,itemY=itemOffset.top,itemW=this.getWidth($a),itemH=this.getHeight($a),$win=$(window),winX=$win.scrollLeft(),winY=$win.scrollTop(),winW=this.getViewportWidth(),winH=this.getViewportHeight(),horizontalParent=$ul.hasClass("sm")&&!$ul.hasClass("sm-vertical"),subOffsetX=level==2?this.opts.mainMenuSubOffsetX:this.opts.subMenusSubOffsetX,subOffsetY=level==2?this.opts.mainMenuSubOffsetY:this.opts.subMenusSubOffsetY,x,y;if(horizontalParent){x=this.opts.rightToLeftSubMenus?itemW-subW-subOffsetX:subOffsetX;y=this.opts.bottomToTopSubMenus?-subH-subOffsetY:itemH+subOffsetY}else{x=this.opts.rightToLeftSubMenus?subOffsetX-subW:itemW-subOffsetX;y=this.opts.bottomToTopSubMenus?itemH-subOffsetY-subH:subOffsetY}if(this.opts.keepInViewport&&!this.isCollapsible()){var absX=itemX+x,absY=itemY+y;if(this.opts.rightToLeftSubMenus&&absX<winX){x=horizontalParent?winX-absX+x:itemW-subOffsetX}else if(!this.opts.rightToLeftSubMenus&&absX+subW>winX+winW){x=horizontalParent?winX+winW-subW-absX+x:subOffsetX-subW}if(!horizontalParent){if(subH<winH&&absY+subH>winY+winH){y+=winY+winH-subH-absY}else if(subH>=winH||absY<winY){y+=winY-absY}}if(horizontalParent&&(absY+subH>winY+winH+.49||absY<winY)||!horizontalParent&&subH>winH+.49){var self=this;if(!$sub.dataSM("scroll-arrows")){$sub.dataSM("scroll-arrows",$([$('<span class="scroll-up"><span class="scroll-up-arrow"></span></span>')[0],$('<span class="scroll-down"><span class="scroll-down-arrow"></span></span>')[0]]).bind({mouseenter:function(){$sub.dataSM("scroll").up=$(this).hasClass("scroll-up");self.menuScroll($sub)},mouseleave:function(e){self.menuScrollStop($sub);self.menuScrollOut($sub,e)},"mousewheel DOMMouseScroll":function(e){e.preventDefault()}}).insertAfter($sub))}var eNS=".smartmenus_scroll";$sub.dataSM("scroll",{step:1,itemH:itemH,subH:subH,arrowDownH:this.getHeight($sub.dataSM("scroll-arrows").eq(1))}).bind(getEventsNS([["mouseover",function(e){self.menuScrollOver($sub,e)}],["mouseout",function(e){self.menuScrollOut($sub,e)}],["mousewheel DOMMouseScroll",function(e){self.menuScrollMousewheel($sub,e)}]],eNS)).dataSM("scroll-arrows").css({top:"auto",left:"0",marginLeft:x+(parseInt($sub.css("border-left-width"))||0),width:subW-(parseInt($sub.css("border-left-width"))||0)-(parseInt($sub.css("border-right-width"))||0),zIndex:$sub.css("z-index")}).eq(horizontalParent&&this.opts.bottomToTopSubMenus?0:1).show();if(this.isFixed()){$sub.css({"touch-action":"none","-ms-touch-action":"none"}).bind(getEventsNS([[touchEvents()?"touchstart touchmove touchend":"pointerdown pointermove pointerup MSPointerDown MSPointerMove MSPointerUp",function(e){self.menuScrollTouch($sub,e)}]],eNS))}}}$sub.css({top:"auto",left:"0",marginLeft:x,marginTop:y-itemH});this.menuIframeShim($sub);if($sub.dataSM("ie-shim")){$sub.dataSM("ie-shim").css({zIndex:$sub.css("z-index"),width:subW,height:subH,marginLeft:x,marginTop:y-itemH})}},menuScroll:function($sub,once,step){var data=$sub.dataSM("scroll"),$arrows=$sub.dataSM("scroll-arrows"),y=parseFloat($sub.css("margin-top")),end=data.up?data.upEnd:data.downEnd,diff;if(!once&&data.velocity){data.velocity*=.9;diff=data.velocity;if(diff<.5){this.menuScrollStop($sub);return}}else{diff=step||(once||!this.opts.scrollAccelerate?this.opts.scrollStep:Math.floor(data.step))}var level=$sub.dataSM("level");if(this.visibleSubMenus.length>level){this.menuHideSubMenus(level-1)}var newY=data.up&&end<=y||!data.up&&end>=y?y:Math.abs(end-y)>diff?y+(data.up?diff:-diff):end;$sub.add($sub.dataSM("ie-shim")).css("margin-top",newY);if(mouse&&(data.up&&newY>data.downEnd||!data.up&&newY<data.upEnd)){$arrows.eq(data.up?1:0).show()}if(newY==end){if(mouse){$arrows.eq(data.up?0:1).hide()}this.menuScrollStop($sub)}else if(!once){if(this.opts.scrollAccelerate&&data.step<this.opts.scrollStep){data.step+=.5}var self=this;this.scrollTimeout=setTimeout(function(){self.menuScroll($sub)},this.opts.scrollInterval)}},menuScrollMousewheel:function($sub,e){if(this.getClosestMenu(e.target)==$sub[0]){e=e.originalEvent;var up=(e.wheelDelta||-e.detail)>0;if($sub.dataSM("scroll-arrows").eq(up?0:1).is(":visible")){$sub.dataSM("scroll").up=up;this.menuScroll($sub,true)}}e.preventDefault()},menuScrollOut:function($sub,e){if(mouse){if(!/^scroll-(up|down)/.test((e.relatedTarget||"").className)&&($sub[0]!=e.relatedTarget&&!$.contains($sub[0],e.relatedTarget)||this.getClosestMenu(e.relatedTarget)!=$sub[0])){$sub.dataSM("scroll-arrows").css("visibility","hidden")}}},menuScrollOver:function($sub,e){if(mouse){if(!/^scroll-(up|down)/.test(e.target.className)&&this.getClosestMenu(e.target)==$sub[0]){this.menuScrollRefreshData($sub);var data=$sub.dataSM("scroll");$sub.dataSM("scroll-arrows").eq(0).css("margin-top",data.upEnd).end().eq(1).css("margin-top",data.downEnd+data.subH-data.arrowDownH).end().css("visibility","visible")}}},menuScrollRefreshData:function($sub){var data=$sub.dataSM("scroll"),$win=$(window),vportY=$win.scrollTop()-$sub.dataSM("parent-a").offset().top-data.itemH;$.extend(data,{upEnd:vportY,downEnd:vportY+this.getViewportHeight()-data.subH})},menuScrollStop:function($sub){if(this.scrollTimeout){clearTimeout(this.scrollTimeout);this.scrollTimeout=0;$.extend($sub.dataSM("scroll"),{step:1,velocity:0});return true}},menuScrollTouch:function($sub,e){e=e.originalEvent;if(isTouchEvent(e)){var touchPoint=this.getTouchPoint(e);if(this.getClosestMenu(touchPoint.target)==$sub[0]){var data=$sub.dataSM("scroll");if(/(start|down)$/i.test(e.type)){if(this.menuScrollStop($sub)){e.preventDefault();this.isTouchScrolling=true}else{this.isTouchScrolling=false}this.menuScrollRefreshData($sub);$.extend(data,{touchY:touchPoint.pageY,touchTimestamp:e.timeStamp,velocity:0})}else if(/move$/i.test(e.type)){var prevY=data.touchY;if(prevY!==undefined&&prevY!=touchPoint.pageY){this.isTouchScrolling=true;$.extend(data,{up:prevY<touchPoint.pageY,touchY:touchPoint.pageY,touchTimestamp:e.timeStamp,velocity:data.velocity+Math.abs(touchPoint.pageY-prevY)*.5});this.menuScroll($sub,true,Math.abs(data.touchY-prevY))}e.preventDefault()}else{if(data.touchY!==undefined){if(e.timeStamp-data.touchTimestamp<120&&data.velocity>0){data.velocity*=.5;this.menuScrollStop($sub);this.menuScroll($sub);e.preventDefault()}delete data.touchY}}}}},menuShow:function($sub){if(!$sub.dataSM("beforefirstshowfired")){$sub.dataSM("beforefirstshowfired",true);if(this.$root.triggerHandler("beforefirstshow.smapi",$sub[0])===false){return}}if(this.$root.triggerHandler("beforeshow.smapi",$sub[0])===false){return}this.menuFixLayout($sub);$sub.stop(true,true);if(!$sub.is(":visible")){$sub.css("z-index",this.zIndexInc=(this.zIndexInc||this.getStartZIndex())+1);if(this.opts.keepHighlighted||this.isCollapsible()){$sub.dataSM("parent-a").addClass("highlighted")}if(this.opts.subMenusMinWidth||this.opts.subMenusMaxWidth){$sub.css({width:"auto",minWidth:"",maxWidth:""}).addClass("sm-nowrap");if(this.opts.subMenusMinWidth){$sub.css("min-width",this.opts.subMenusMinWidth)}if(this.opts.subMenusMaxWidth){var noMaxWidth=this.getWidth($sub);$sub.css("max-width",this.opts.subMenusMaxWidth);if(noMaxWidth>this.getWidth($sub)){$sub.removeClass("sm-nowrap").css("width",this.opts.subMenusMaxWidth)}}}this.menuPosition($sub);if($sub.dataSM("ie-shim")){$sub.dataSM("ie-shim").insertBefore($sub)}var complete=function(){$sub.css("overflow","")};if(this.isCollapsible()){if(this.opts.collapsibleShowFunction){this.opts.collapsibleShowFunction.call(this,$sub,complete)}else{$sub.show(this.opts.collapsibleShowDuration,complete)}}else{if(this.opts.showFunction){this.opts.showFunction.call(this,$sub,complete)}else{$sub.show(this.opts.showDuration,complete)}}this.visibleSubMenus[$sub.dataSM("level")-1]=$sub;this.$root.triggerHandler("show.smapi",$sub[0])}},popupHide:function(noHideTimeout){if(this.hideTimeout){clearTimeout(this.hideTimeout);this.hideTimeout=0}var self=this;this.hideTimeout=setTimeout(function(){self.menuHideAll()},noHideTimeout?1:this.opts.hideTimeout)},popupShow:function(left,top){if(!this.opts.isPopup){alert('SmartMenus jQuery Error:\n\nIf you want to show this menu via the "popupShow" method, set the isPopup:true option.');return}if(this.hideTimeout){clearTimeout(this.hideTimeout);this.hideTimeout=0}this.menuFixLayout(this.$root);this.$root.stop(true,true);if(!this.$root.is(":visible")){this.$root.css({left:left,top:top});this.menuIframeShim(this.$root);if(this.$root.dataSM("ie-shim")){this.$root.dataSM("ie-shim").css({zIndex:this.$root.css("z-index"),width:this.getWidth(this.$root),height:this.getHeight(this.$root),left:left,top:top}).insertBefore(this.$root)}var self=this,complete=function(){self.$root.css("overflow","")};if(this.opts.showFunction){this.opts.showFunction.call(this,this.$root,complete)}else{this.$root.show(this.opts.showDuration,complete)}this.visibleSubMenus[0]=this.$root}},refresh:function(){this.menuHideAll();this.$root.find("ul").each(function(){var $this=$(this);if($this.dataSM("scroll-arrows")){$this.dataSM("scroll-arrows").remove()}}).removeDataSM("in-mega").removeDataSM("shown-before").removeDataSM("ie-shim").removeDataSM("scroll-arrows").removeDataSM("parent-a").removeDataSM("level").removeDataSM("beforefirstshowfired");this.$root.find("a.has-submenu").removeClass("has-submenu").parent().removeDataSM("sub");if(this.opts.subIndicators){this.$root.find("span.sub-arrow").remove()}if(this.opts.markCurrentItem){this.$root.find("a.current").removeClass("current")}this.subMenus=[];this.init(true)},rootOut:function(e){if(!this.handleEvents()||this.isTouchMode()||e.target==this.$root[0]){return}if(this.hideTimeout){clearTimeout(this.hideTimeout);this.hideTimeout=0}if(!this.opts.showOnClick||!this.opts.hideOnClick){var self=this;this.hideTimeout=setTimeout(function(){self.menuHideAll()},this.opts.hideTimeout)}},rootOver:function(e){if(!this.handleEvents()||this.isTouchMode()||e.target==this.$root[0]){return}if(this.hideTimeout){clearTimeout(this.hideTimeout);this.hideTimeout=0}},winResize:function(e){if(!this.handleEvents()){if(this.$disableOverlay){var pos=this.$root.offset();this.$disableOverlay.css({top:pos.top,left:pos.left,width:this.$root.outerWidth(),height:this.$root.outerHeight()})}return}if(!this.isCollapsible()&&(!("onorientationchange"in window)||e.type=="orientationchange")){if(this.activatedItems.length){this.activatedItems[this.activatedItems.length-1][0].blur()}this.menuHideAll()}}}});$.fn.dataSM=function(key,val){if(val){return this.data(key+"_smartmenus",val)}return this.data(key+"_smartmenus")};$.fn.removeDataSM=function(key){return this.removeData(key+"_smartmenus")};$.fn.smartmenus=function(options){if(typeof options=="string"){var args=arguments,method=options;Array.prototype.shift.call(args);return this.each(function(){var smartmenus=$(this).data("smartmenus");if(smartmenus&&smartmenus[method]){smartmenus[method].apply(smartmenus,args)}})}var opts=$.extend({},$.fn.smartmenus.defaults,options);return this.each(function(){new $.SmartMenus(this,opts)})};$.fn.smartmenus.defaults={isPopup:false,mainMenuSubOffsetX:0,mainMenuSubOffsetY:0,subMenusSubOffsetX:0,subMenusSubOffsetY:0,subMenusMinWidth:"200px",subMenusMaxWidth:"400px",subIndicators:true,subIndicatorsPos:"prepend",subIndicatorsText:"+",scrollStep:30,scrollInterval:30,scrollAccelerate:false,showTimeout:250,hideTimeout:500,showDuration:0,showFunction:null,hideDuration:0,hideFunction:function($ul,complete){$ul.fadeOut(200,complete)},collapsibleShowDuration:0,collapsibleShowFunction:function($ul,complete){$ul.slideDown(200,complete)},collapsibleHideDuration:0,collapsibleHideFunction:function($ul,complete){$ul.slideUp(200,complete)},showOnClick:false,hideOnClick:true,keepInViewport:true,keepHighlighted:true,markCurrentItem:false,markCurrentTree:true,rightToLeftSubMenus:false,bottomToTopSubMenus:false,overlapControlsInIE:true}})(jQuery);