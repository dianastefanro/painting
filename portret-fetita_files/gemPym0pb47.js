/*!CK:1924012641!*//*1458237492,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["4H\/t6"]); }

__d('PhotoResizeMath',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={getScaledPhotoDimensions:function(i,j,k,l,m){var n=i/j,o=k/l;if(k&&l&&m==='stretch')return {width:k,height:l};if(!k&&l||m==='contain'!==n>=o)return {width:l*n,height:l};if(k)return {width:k,height:k/n};return {width:i,height:j};}};f.exports=h;},null);
__d('PixelzFocus',[],function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();var h={search:function(i,j){var k=0,l=i.length-1;while(k<=l){var m=k+Math.floor((l-k)/2),n=i[m];if(n>j){l=m-1;}else if(n<j){k=m+1;}else return m;}return Math.min(k,l);},forceSpecificPoint:function(i,j,k){var l=1e-09,m=h.search(i,j-k-l)+1,n=h.search(i,j+k);return i.slice(m,n+1);},findBiggestSets:function(i,j){var k=[],l=-1;for(var m=0;m<i.length;++m){var n=i[m],o=m,p=h.search(i,n+j),q=p-o;if(q>l)k=[];if(q>=l){l=q;k.push({low:o,high:p});}}return k;},getBestSet:function(i,j,k){var l=-1,m=null;for(var n=0;n<j.length;++n){var o=j[n],p=i[o.low],q=i[o.high],r=p+(q-p)/2,s=Math.min(p-(r-k),r+k-q);if(s>l){l=s;m=o;}}return m;},getFocusFromSet:function(i,j){var k=i[j.low],l=i[j.high];return k+(l-k)/2;},clampFocus:function(i,j){var k=j/2,l=1-j/2;if(i<k)return k;if(i>l)return l;return i;},convertFromCenterToCSS:function(i,j){if(Math.abs(1-j)<1e-05)return 0;return (i-j/2)/(1-j);},convertFromCSSToCenter:function(i,j){return i*(1-j)+j/2;},getVisible:function(i,j){if(i<j)return i/j;return j/i;},getHidden:function(i,j){return 1-h.getVisible(i,j);},focusHorizontally:function(i,j){return i<j;},convertVectorFromCenterToCSS:function(i,j,k){var l=h.focusHorizontally(j,k),m;if(l){m=i.x/100;}else m=i.x/100;var n=h.convertFromCenterToCSS(m,h.getVisible(j,k));if(l){return {x:n,y:0};}else return {x:0,y:n};},getCropRect:function(i,j,k){var l=h.focusHorizontally(j,k),m=h.getVisible(j,k);if(l){var n=(1-m)*i.x;return {left:n,top:0,width:m,height:1};}else{var o=(1-m)*i.y;return {left:0,top:o,width:1,height:m};}}};f.exports=h;},null);
__d('loadImage',[],function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();function h(i,j){var k=new Image();k.onload=function(){j(k.width,k.height,k);};k.src=i;}f.exports=h;},null);
__d('Pixelz.react',['cx','arrayContains','loadImage','joinClasses','React','PhotoResizeMath','PixelzFocus'],function a(b,c,d,e,f,g,h){'use strict';if(c.__markCompiled)c.__markCompiled();var i=c('React').PropTypes,j=c('React').createClass({displayName:'Pixelz',propTypes:{width:i.number,height:i.number,resizeMode:i.oneOf(['contain','cover','stretch']),alt:i.string,letterbox:i.bool,borderRadius:i.number,insetBorderColor:i.string,animated:i.bool,upscale:i.bool,cropRect:function(k,l,m){var n=k[l],o='Invalid prop `'+l+'` supplied to `'+m+'`, expected a rectangle with values normalized '+'between 0 and 1.';if(n.left<0||n.top<0||n.width<0||n.height<0||n.left+n.width>1||n.top+n.height>1)return new Error(o);},focus:function(k,l,m){var n=k[l],o='Invalid prop `'+l+'` supplied to `'+m+'`, expected either a {x, y, type} vector where type '+'is `css` or `center` or an array of {x, y} vectors. All the vectors '+'have with values normalized between 0 and 1.';if(Array.isArray(n)){for(var p=0;p<n.length;++p)if(!(n[p].x>=0&&n[p].x<=1)||!(n[p].y>=0&&n[p].y<=1))return new Error(o);}else{if(!n.type)n.type='css';if(!(n.x>=0&&n.x<=1)||!(n.y>=0&&n.y<=1)||!c('arrayContains')(['center','css'],n.type))return new Error(o);}}},getDefaultProps:function(){return {resizeMode:'cover',alt:'',letterbox:true,upscale:true,cropRect:{width:1,height:1,top:0,left:0},focus:{x:.5,y:.5,type:'css'}};},getInitialState:function(){return {srcDimensions:{}};},getSrcDimensions:function(){var k=this.props.src,l=this.state.srcDimensions[k];if(l)return l;c('loadImage')(k,function(m,n){var o={};o[k]={width:m,height:n};this.isMounted()&&this.setState({srcDimensions:o});}.bind(this));return null;},getCropSrcDimensions:function(){var k=this.getSrcDimensions();return {width:k.width*this.props.cropRect.width,height:k.height*this.props.cropRect.height};},getUpscaleCropDimensions:function(){var k=this.getCropSrcDimensions();return c('PhotoResizeMath').getScaledPhotoDimensions(k.width,k.height,this.props.width,this.props.height,this.props.resizeMode);},getCropDimensions:function(){var k=this.getUpscaleCropDimensions(),l=this.getCropSrcDimensions();if(!this.props.upscale)return {width:Math.min(k.width,l.width),height:Math.min(k.height,l.height)};return k;},getCropAspectRatio:function(){var k=this.getCropDimensions();return k.width/k.height;},getContainerDimensions:function(){if(this.props.letterbox&&this.props.width&&this.props.height)return {width:this.props.width,height:this.props.height};return this.getCropDimensions();},getContainerAspectRatio:function(){var k=this.getContainerDimensions();return k.width/k.height;},getContainerPosition:function(){return {left:0,top:0};},getFocus:function(){var k=this.props.focus;if(!Array.isArray(k)&&k.type==='css')return {x:k.x,y:k.y};var l=this.getContainerAspectRatio(),m=this.getCropAspectRatio(),n=c('PixelzFocus').getVisible(l,m),o=c('PixelzFocus').focusHorizontally(l,m),p;if(!Array.isArray(k)){p=c('PixelzFocus').convertFromCenterToCSS(o?k.x:k.y,n);}else{var q=k.map(function(t){return o?t.x:t.y;});q.sort();var r=c('PixelzFocus').findBiggestSets(q,n),s=c('PixelzFocus').getBestSet(q,r,n);p=c('PixelzFocus').getFocusFromSet(q,s);}return {x:o?p:.5,y:o?.5:p};},getCropPosition:function(){var k=this.getCropDimensions(),l=this.getContainerDimensions(),m=this.getFocus();return {left:m.x*(l.width-k.width),top:m.y*(l.height-k.height)};},getScaleDimensions:function(){var k=this.getCropDimensions();return {width:k.width/this.props.cropRect.width,height:k.height/this.props.cropRect.height};},getScalePosition:function(){var k=this.getScaleDimensions();return {left:-k.width*this.props.cropRect.left,top:-k.height*this.props.cropRect.top};},getClipCropRectangle:function(){var k=this.getContainerDimensions(),l=this.getCropDimensions(),m=this.getContainerPosition(),n=this.getCropPosition(),o=Math.max(m.left,n.left),p=Math.max(m.top,n.top),q=Math.min(m.top+k.height,n.top+l.height),r=Math.min(m.left+k.width,n.left+l.width);return {left:o,top:p,width:r-o,height:q-p};},getClipCropPosition:function(){var k=this.getClipCropRectangle();return {left:k.left,top:k.top};},getClipCropDimensions:function(){var k=this.getClipCropRectangle();return {width:k.width,height:k.height};},getClipScalePosition:function(){var k=this.getScalePosition(),l=this.getClipCropPosition(),m=this.getCropPosition();return {left:k.left+(m.left-l.left),top:k.top+(m.top-l.top)};},getClipScaleDimensions:function(){return this.getScaleDimensions();},areDimensionsEqual:function(k,l){return k.width===l.width&&k.height===l.height;},shouldAddAllNodesAndStyles:function(){return this.props.animated;},hasCrop:function(){if(this.shouldAddAllNodesAndStyles())return true;var k=this.getContainerDimensions(),l=this.getClipCropDimensions(),m=this.getClipScaleDimensions();if(this.areDimensionsEqual(k,l)||this.areDimensionsEqual(l,m))return false;return true;},hasContainer:function(){if(this.shouldAddAllNodesAndStyles()||this.hasInsetBorder())return true;var k=this.getContainerDimensions(),l=this.getClipScaleDimensions();if(this.areDimensionsEqual(k,l))return false;return true;},hasInsetBorder:function(){return this.shouldAddAllNodesAndStyles()||this.props.insetBorderColor;},applyPositionStyle:function(k,l){if(this.shouldAddAllNodesAndStyles()||l.left)k.left=Math.round(l.left);if(this.shouldAddAllNodesAndStyles()||l.top)k.top=Math.round(l.top);},applyDimensionsStyle:function(k,l){k.width=Math.round(l.width);k.height=Math.round(l.height);},applyBorderRadiusStyle:function(k){if(this.shouldAddAllNodesAndStyles()||this.props.borderRadius)k.borderRadius=this.props.borderRadius||0;},getScaleStyle:function(){var k={},l=this.getClipCropDimensions(),m=this.getClipScaleDimensions();if(this.shouldAddAllNodesAndStyles()||!this.areDimensionsEqual(l,m)){this.applyPositionStyle(k,this.getClipScalePosition());}else this.applyPositionStyle(k,this.getClipCropPosition());this.applyDimensionsStyle(k,this.getClipScaleDimensions());this.applyBorderRadiusStyle(k);return k;},getCropStyle:function(){var k={};this.applyPositionStyle(k,this.getClipCropPosition());this.applyDimensionsStyle(k,this.getClipCropDimensions());this.applyBorderRadiusStyle(k);return k;},getInsetBorderStyle:function(){var k={borderColor:this.props.insetBorderColor||'transparent'};this.applyPositionStyle(k,this.getClipCropPosition());this.applyDimensionsStyle(k,this.getClipCropDimensions());this.applyBorderRadiusStyle(k);return k;},getContainerStyle:function(){var k={};this.applyDimensionsStyle(k,this.getContainerDimensions());this.applyBorderRadiusStyle(k);return k;},getScale:function(){var k=this.getScaleStyle(),l=k.width,m=k.height;k=babelHelpers['extends']({},k);delete k.width;delete k.height;return (c('React').createElement('img',babelHelpers['extends']({},this.props,{alt:this.props.alt,className:c('joinClasses')(this.props.className,"_56wb"+(this.shouldAddAllNodesAndStyles()?' '+"_56t5":'')),src:this.props.src,style:babelHelpers['extends']({},this.props.style||{},k),width:l,height:m})));},getCrop:function(){var k=this.getScale();if(!this.hasCrop())return k;return (c('React').createElement('div',{className:"_56ma"+(this.shouldAddAllNodesAndStyles()?' '+"_56t5":''),style:this.getCropStyle()},k));},getInsetBorder:function(){if(!this.hasInsetBorder())return null;return (c('React').createElement('div',{className:"_56lv"+(this.shouldAddAllNodesAndStyles()?' '+"_56t5":''),style:this.getInsetBorderStyle()}));},getContainer:function(){var k=this.getCrop();if(!this.hasContainer())return k;var l=this.getInsetBorder();return (c('React').createElement('div',{className:"_56jj"+(this.shouldAddAllNodesAndStyles()?' '+"_56t5":''),'data-skipchecker':null,style:this.getContainerStyle()},k,l));},render:function(){var k=this.getSrcDimensions();if(!k)return c('React').createElement('span',{'data-skipchecker':null});return this.getContainer();}});f.exports=j;},null);
__d('MercuryParticipantsImage.react',['MercuryParticipants','React','SplitImage.react','areEqual'],function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();var h=c('React').PropTypes,i=c('React').createClass({displayName:'MercuryParticipantsImage',_bigImageToken:null,propTypes:{participants:h.array.isRequired,size:h.number},getInitialState:function(){return {participantImages:[]};},componentDidMount:function(){this._getParticipantImages(this.props);},componentWillReceiveProps:function(j){this._getParticipantImages(j);},componentWillUnmount:function(){this._bigImageToken&&this._bigImageToken.remove();},shouldComponentUpdate:function(j,k){return (j.size!==this.props.size||!k||!c('areEqual')(k.participantImages,this.state.participantImages));},render:function(){if(this.state.participantImages.length>0)return (c('React').createElement(c('SplitImage.react'),{border:true,className:this.props.className,srcs:this.state.participantImages,size:this.props.size}));return null;},_getParticipantImages:function(j){this._bigImageToken&&this._bigImageToken.remove();this._bigImageToken=c('MercuryParticipants').getOrderedBigImageMulti(j.participants,function(k){this.isMounted()&&this.setState({participantImages:k});}.bind(this));}});f.exports=i;},null);
__d('MercuryThreadImage.react',['ImmutableObject','MercuryIDs','MercuryParticipantsImage.react','MercuryParticipantsConstants','Pixelz.react','React','areEqual'],function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();var h=c('React').PropTypes,i=c('React').createClass({displayName:'MercuryThreadImage',propTypes:{thread:h.instanceOf(c('ImmutableObject')).isRequired,viewer:h.string.isRequired,size:h.number,useBackground:h.bool},shouldComponentUpdate:function(j,k){return (j.thread.image_src!==this.props.thread.image_src||!c('areEqual')(j.thread.participants,this.props.thread.participants)||j.size!==this.props.size||j.viewer!==this.props.viewer||j.useBackground!==this.props.useBackground);},render:function(){var j=this.props.size||c('MercuryParticipantsConstants').BIG_IMAGE_SIZE,k=this.props.thread.image_src;if(k){if(this.props.useBackground)return (c('React').createElement('div',{style:{height:j,backgroundImage:'url('+k+')',backgroundPosition:'50% 50%',backgroundRepeat:'no-repeat',backgroundSize:'cover',width:j}}));return (c('React').createElement(c('Pixelz.react'),{alt:'',height:j,resizeMode:'cover',src:k,width:j}));}var l=c('MercuryIDs').getParticipantIDFromUserID(this.props.viewer),m=this.props.thread.participants.filter(function(o){return o!==l;}),n=[];if(!m.length){n=[l];}else if(m.length==1){n=m;}else n=m.slice(0,3);return (c('React').createElement(c('MercuryParticipantsImage.react'),{participants:n,size:j}));}});f.exports=i;},null);
__d('MercuryTypeaheadDataSource',['Banzai','BanzaiLogger','CurrentUser','DataSource','MercuryConfig','MercuryParticipantTypes','MercuryTypeaheadConstants','OrderedFriendsList','ShortProfiles','WorkModeConfig','debounce'],function a(b,c,d,e,f,g){var h,i;if(c.__markCompiled)c.__markCompiled();var j=500,k=[],l={},m={},n={},o=false,p=false;h=babelHelpers.inherits(q,c('DataSource'));i=h&&h.prototype;function q(r){'use strict';r=r||{};r.kanaNormalization=true;i.constructor.call(this,r);this.logQuery=c('debounce')(function(s){this.$MercuryTypeaheadDataSource1(s);},j,this,true);this.logResponse=c('debounce')(function(s){this.$MercuryTypeaheadDataSource1(s);},j,this,true);}q.prototype.dirty=function(){'use strict';this.$MercuryTypeaheadDataSource2=k;this.localCache=m;this.queryCache=l;this.queryIDs=n;return this;};q.prototype.bootstrap=function(){'use strict';if(o||p)return false;this.$MercuryTypeaheadDataSource1({event:'bootstrap_start'});p=true;c('ShortProfiles').fetchAll().then(function(){this.updateBootstrapData();this.$MercuryTypeaheadDataSource1({event:'bootstrap_end'});p=false;o=true;}.bind(this),function(){this.$MercuryTypeaheadDataSource1({event:'bootstrap_failure'});}.bind(this));return true;};q.prototype.updateBootstrapData=function(){'use strict';var r=this.getCachedShortProfileIDs(),s=c('WorkModeConfig').is_work_user?c('MercuryParticipantTypes').FB4C:c('MercuryParticipantTypes').FRIEND,t=r.map(function(u){var v=c('ShortProfiles').getNow(u),w=u==c('CurrentUser').getID()?s:v.type,x=[v.additionalName,v.alternateName].concat(v.searchTokens||[]).join(' '),y=v.name,z=null;if(v.threadNickname){y=v.threadNickname;z=v.name;}return {uid:u,index:c('OrderedFriendsList').getActiveRank(u),text:y,subtext:z,tokens:x,localized_text:v.name,additional_text:v.additionalName,photo:v.thumbSrc,render_type:w,type:c('MercuryTypeaheadConstants').USER_TYPE};});if(t.length)this.addEntries(t);};q.prototype.query=function(r,s,t,u){'use strict';var v=s||r.length===1;return i.query.call(this,r,v,t,u);};q.prototype.getQueryData=function(r,s){'use strict';return babelHelpers['extends']({},i.getQueryData.call(this,r,s));};q.prototype.setEntry=function(r,s){'use strict';this.$MercuryTypeaheadDataSource2[r]=s;};q.prototype.getEntry=function(r){'use strict';return this.$MercuryTypeaheadDataSource2[r]||null;};q.prototype.getCachedShortProfileIDs=function(){'use strict';var r=c('ShortProfiles').getCachedProfileIDs(),s=r.filter(function(t){var u=c('ShortProfiles').getNow(t);return (t==c('CurrentUser').getID()||u.type===c('MercuryParticipantTypes').FRIEND||u.type===c('MercuryParticipantTypes').FB4C||u.type===c('MercuryParticipantTypes').PAGE&&c('MercuryConfig').LinkedAgents&&c('MercuryConfig').LinkedAgents.indexOf(t.toString())>-1);});return s;};q.prototype.isBootstrapped=function(){'use strict';return o;};q.prototype.isBootstrapping=function(){'use strict';return p;};q.prototype.processEntries=function(r,s){'use strict';r=r.map(function(t){if(t.index==null&&(t.render_type===c('MercuryParticipantTypes').FRIEND||t.render_type===c('MercuryParticipantTypes').FB4C))t.index=c('OrderedFriendsList').getActiveRank(t.uid);if(t.render_type===c('MercuryParticipantTypes').PAGE&&c('MercuryConfig').LinkedAgents&&c('MercuryConfig').LinkedAgents.indexOf(t.uid.toString())>-1)t.index=1;return t;});return i.processEntries.call(this,r);};q.prototype.mergeUids=function(r,s,t,u){'use strict';var v=s.sort(function(w,x){return this.getEntry(w).index-this.getEntry(x).index;}.bind(this));return i.mergeUids.call(this,r,v,t,u);};q.prototype.$MercuryTypeaheadDataSource1=function(r){'use strict';if(!c('Banzai').isEnabled('mercury_typeahead_logging'))return;c('BanzaiLogger').log('MercuryQueryResultsLoggerConfig',r);};f.exports=q;},null);
__d('legacy:CompactTypeaheadRenderer',['CompactTypeaheadRenderer'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();if(!b.TypeaheadRenderers)b.TypeaheadRenderers={};b.TypeaheadRenderers.compact=c('CompactTypeaheadRenderer');},3);