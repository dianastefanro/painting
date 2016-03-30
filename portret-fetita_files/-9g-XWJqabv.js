/*!CK:2517442779!*//*1456170378,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["Rs18G"]); }

__d('legacy:PhotoSnowlift',['PhotoSnowlift'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();b.PhotoSnowlift=c('PhotoSnowlift');},3);
__d('PhotoViewerFollow',['Arbiter','AsyncRequest','BanzaiODS','CSS','DOM','Event','Parent','PhotosConst','$'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={};function i(j){'use strict';this.viewer=j;}i.prototype.init=function(j,k,l,m,n,o,p){'use strict';this.subscribeLink=j;this.unsubscribeFlyout=k;this.subscribeEndpoints=n;this.unsubscribeEndpoints=o;this.unsubLinks=m;this.unsubDiv=l;this.reset();this.activate();this.type=p;c('Event').listen(this.subscribeLink,'click',function(event){if(c('Parent').byClass(event.getTarget(),'photoViewerFollowLink'))this.subscribePhotoOwner();}.bind(this));c('Event').listen(this.unsubLinks.user,'click',this.unsubscribePhotoOwner.bind(this));c('Event').listen(this.unsubLinks.page,'click',this.unsubscribePhotoOwner.bind(this));c('Arbiter').subscribe(['FollowUser','FollowUserFail','UnfollowUser','UnfollowUserFail'],this.updateSubscribe.bind(this));c('Arbiter').subscribe(this.viewer.getEventString('DATA_CHANGE'),this.showSubscribeLinkOnChange.bind(this));if(this.viewer.getVersionConst()===c('PhotosConst').VIEWER_SNOWLIFT){c('Arbiter').subscribe(this.viewer.getEventString('CLOSE'),this.reset.bind(this));c('Arbiter').subscribe(this.viewer.getEventString('OPEN'),this.activate.bind(this));}this.registerUnsubscribeTarget();};i.prototype.activate=function(){'use strict';this.activated=true;};i.prototype.reset=function(){'use strict';this.unsubscribeFlyout&&this.unsubscribeFlyout.clearNodes();this.subscriptionChange={};this.activated=false;};i.prototype.registerUnsubscribeTarget=function(){'use strict';if(!this.unsubscribeFlyout)return;var j=c('DOM').scry(this.subscribeLink,'.photoViewerFollowedMsg')[0];if(j&&!c('CSS').hasClass(j,'unsubFlyoutEnabled')){this.unsubscribeFlyout.initNode(j);c('CSS').addClass(j,'unsubFlyoutEnabled');}};i.prototype.updateSubscribe=function(j,k){'use strict';if(!this.activated)return;var l=k.profile_id;if(l){this.subscriptionChange[l]=j==='FollowUser'||j==='UnfollowUserFail'?'following':'unfollowed';this.toggleSubscribeLink(l);}};i.prototype.showSubscribeLinkOnChange=function(j,k){'use strict';this.type=k.ownertype;c('CSS').conditionClass(this.unsubDiv,'isPage',this.type==='page');this.toggleSubscribeLink(k.owner);};i.prototype.toggleSubscribeLink=function(j){'use strict';var k=c('DOM').scry(this.subscribeLink,'span.fbPhotoSubscribeWrapper')[0];if(!k)return;if(this.subscriptionChange[j]){c('CSS').conditionClass(k,'followingOwner',this.subscriptionChange[j]==='following');if(this.subscriptionChange[j]==='unfollowed')this.unsubscribeFlyout&&this.unsubscribeFlyout.hideFlyout(true);}this.registerUnsubscribeTarget();};i.prototype.subscribePhotoOwner=function(){'use strict';if(!this.viewer.getOwnerId())return;var j=this.type==='user'?{profile_id:this.viewer.getOwnerId()}:{fbpage_id:this.viewer.getOwnerId(),add:true,reload:false,fan_origin:'photo_snowlift'};c('Arbiter').inform('FollowUser',{profile_id:this.viewer.getOwnerId()});if(this.type==='page')c('BanzaiODS').bumpEntityKey('snowlift_page_like','snowlift_page_like.clicked_link');j.location=this.FOLLOW_LOCATION_PHOTO;new (c('AsyncRequest'))(this.subscribeEndpoints[this.type]).setAllowCrossPageTransition(true).setData(j).setMethod('POST').setReadOnly(false).setErrorHandler(c('Arbiter').inform.bind(null,'FollowUserFail',j)).send();};i.prototype.unsubscribePhotoOwner=function(){'use strict';if(!this.viewer.getOwnerId())return;var j=this.type==='user'?{profile_id:this.viewer.getOwnerId()}:{fbpage_id:this.viewer.getOwnerId(),add:false,reload:false};c('Arbiter').inform('UnfollowUser',{profile_id:this.viewer.getOwnerId()});j.location=this.FOLLOW_LOCATION_PHOTO;new (c('AsyncRequest'))(this.unsubscribeEndpoints[this.type]).setAllowCrossPageTransition(true).setData(j).setMethod('POST').setReadOnly(false).setErrorHandler(c('Arbiter').inform.bind(null,'UnfollowUserFail',j)).send();};i.createInstance=function(j,k,l,m,n,o,p,q){'use strict';var r=j.getInstance(),s=new i(r);s.init(c('$')(k),l,m,n,o,p,q);h[r.getVersionConst()]=s;return s;};i.getInstance=function(j){'use strict';return h[j];};Object.assign(i.prototype,{FOLLOW_LOCATION_PHOTO:48});f.exports=i;},null);
__d('PhotosButtonTooltips',['Arbiter','DOMDimensions','Style','Tooltip'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h=[],i=[],j;function k(o,p){if(!o||!o.length||!p||!p.length||o.length!=p.length)throw new Error('Incorrect arguments passed in from PHP for photo button cropping');var q=0,r=[],s=false;for(q=0;q<o.length;q++){r.push(c('DOMDimensions').getElementDimensions(o[q]).width);if(r[q])s=true;}if(s){o.forEach(function(w){c('Style').set(w,'max-width','100%');});for(q=0;q<o.length;q++){var t=o[q],u=r[q];if(u){var v=c('DOMDimensions').getElementDimensions(t).width;if(v>u){c('Tooltip').set(t,p[q]);i.push(t);}}}o.forEach(function(w){c('Style').set(w,'max-width','');});}return s;}function l(){h.forEach(function(o){o.unsubscribe();});h=[];i.forEach(c('Tooltip').remove);i=[];}function m(o,p,q){this.arbiterToken=c('Arbiter').subscribe(o,function(){if(k(p,q))this.arbiterToken&&this.arbiterToken.unsubscribe();}.bind(this));}var n={init:function(){if(!j)j=c('Arbiter').subscribe('PhotoSnowlift.CLOSE',l);},registerButtonsOnPaging:function(o,p){h.push(new m('PhotoSnowlift.DATA_CHANGE',o,p).arbiterToken);},registerButtonsOnTaggingOn:function(o,p){h.push(new m('PhotoTagger.ACTIVATED_TAGGING',o,p).arbiterToken);},registerButtonsOnTaggingOff:function(o,p){h.push(new m('PhotoTagger.DEACTIVATED_TAGGING',o,p).arbiterToken);}};f.exports=n;},null);