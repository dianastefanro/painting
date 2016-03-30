/*!CK:2361435944!*//*1458219055,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["SDWMQ"]); }

__d("CreditCardFormParam",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={ACCOUNT_ID:"account_id",ACCOUNT_COUNTRY_CODE:"account_country_code",APP_ID:"app_id",CARD_EXPIRATION:"exp",CARD_FBID:"cc_fbid",CARD_ID:"cc_id",CARD_TYPE:"cardType",CITY:"city",CONTEXT_ID:"context_id",COUNTRY:"country",CSC_LENGTH:"csc_length",EMAIL:"email",FIRST_NAME:"firstName",TRACKING_ID:"tracking_id",JSFAIL_SOURCE:"jsfail_source",KEYPRESS_TIMES:"kpts",LAST_NAME:"lastName",MONTH:"month",STATE:"state",STREET:"street",STREET_2:"street2",VALIDATE_ADDRESS:"validate_address",VALIDATE_NAME:"validate_name",VALIDATE_ZIP:"validate_zip",YEAR:"year",ZIP:"zip",VALIDATOR_CHECKS:"checks",CARD_NUMBER:"creditCardNumber",CSC:"csc",CARD_NUMBER_FIRST_6:"creditCardNumber_first6",CARD_NUMBER_LAST_4:"creditCardNumber_last4",CARD_NUMBER_TOKEN:"creditCardNumber_token",CSC_TOKEN:"csc_token",AUTH_LEVEL_FLAG:"auth_level",AUTH_AMOUNT:"auth_amount",AUTH_CURRENCY:"auth_currency",AUTO_EXPAND_AUTH_LEVEL_FLAG:"auto_expand_auth_level",PAYMENT_ITEM_TYPE:"payment_item_type",CREDENTIAL_ID:"credential_id",IS_STORED_BALANCE:"is_stored_balance",FLOW_TYPE:"flow_type",STORED_BALANCE_STATUS:"stored_balance_status"};},null);
__d("XCommerceErrorParam",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={ERRORS:"errors",GENERAL_ERROR:"general",FIELD_ERRORS:"fields",ERROR_CODE:"code",ERROR_MSG:"message",ERROR_TITLE:"title"};},null);
__d("XPaymentsCreditCardMutationType",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={CREATE:"create",UPDATE:"update",CACHE_CVV:"cache_cvv"};},null);
__d("XPaymentsCreditCardMutatorParam",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={MUTATION_TYPE:"mutation_type",CARD_FBID:"cc_fbid",CACHE_TOKEN:"cache_token",ERRORS:"errors",GENERAL_ERROR:"general",FIELD_ERRORS:"fields",ERROR_CODE:"code",ERROR_MSG:"message",ERROR_TITLE:"title"};},null);
__d('Currency',['CurrencyConfig'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h=c('CurrencyConfig').allCurrenciesByCode;function i(n){if(h[n])return h[n].format;return null;}function j(n){if(h[n])return h[n].symbol;return null;}function k(n){if(h[n])return 1*h[n].offset;return 1;}function l(n){if(h[n])return h[n].name;return null;}function m(n){if(h[n])return h[n].iso;return null;}g.getFormat=i;g.getSymbol=j;g.getOffset=k;g.getName=l;g.getISO=m;},null);
__d('intlNumUtils',['NumberFormatConfig','escapeRegex'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h=/(\d)(\d\d\d)($|\D)/,i={'\u060C':'.','\u0660':'0','\u0661':'1','\u0662':'2','\u0663':'3','\u0664':'4','\u0665':'5','\u0666':'6','\u0667':'7','\u0668':'8','\u0669':'9','\u066B':'.','\u06F0':'0','\u06F1':'1','\u06F2':'2','\u06F3':'3','\u06F4':'4','\u06F5':'5','\u06F6':'6','\u06F7':'7','\u06F8':'8','\u06F9':'9'},j=['\u0433\u0440\u043d.','\u0434\u0435\u043d.','\u043b\u0432.','\u043c\u0430\u043d.','\u0564\u0580.','\u062c.\u0645.','\u062f.\u0625.','\u062f.\u0627.','\u062f.\u0628.','\u062f.\u062a.','\u062f.\u062c.','\u062f.\u0639.','\u062f.\u0643.','\u062f.\u0644.','\u062f.\u0645.','\u0631.\u0633.','\u0631.\u0639.','\u0631.\u0642.','\u0631.\u064a.','\u0644.\u0633.','\u0644.\u0644.','\u0783.','B/.','Bs.','Fr.','kr.','L.','p.','S/.'],k={};function l(aa){if(!k[aa])k[aa]=new RegExp(aa,'i');return k[aa];}var m=l(j.reduce(function(aa,ba,ca){return aa+(ca?'|':'')+'('+c('escapeRegex')(ba)+')';},''));function n(aa,ba,ca,da,ea){ca=ca||'';da=da||'.';ea=ea||0;if(ba===undefined||ba===null){aa=aa.toString();}else if(typeof aa==='string'){aa=t(aa,ba);}else aa=r(aa,ba);var fa=aa.split('.'),ga=fa[0],ha=fa[1];if(Math.abs(parseInt(ga,10)).toString().length>=ea){var ia='',ja='$1'+ca+'$2$3';while((ia=ga.replace(h,ja))!=ga)ga=ia;}var ka=ga;if(ha)ka+=da+ha;return ka;}function o(aa,ba){return n(aa,ba,'',c('NumberFormatConfig').decimalSeparator,c('NumberFormatConfig').minDigitsForThousandsSeparator);}function p(aa,ba){return n(aa,ba,c('NumberFormatConfig').numberDelimiter,c('NumberFormatConfig').decimalSeparator,c('NumberFormatConfig').minDigitsForThousandsSeparator);}function q(aa,ba,ca){var da=Math.floor(Math.log(aa)/Math.LN10),ea=aa;if(da<ca)ea=aa*Math.pow(10,-da+ca);var fa=Math.pow(10,Math.floor(Math.log(ea)/Math.LN10)-ca+1),ga=Math.round(ea/fa)*fa;if(da<ca)ga/=Math.pow(10,-da+ca);return p(ga,ba);}function r(aa,ba){var ca=ba==null?0:ba,da=Math.pow(10,ca),ea=aa;ea=Math.round(ea*da)/da;ea=ea+'';if(!ca)return ea;var fa=ea.indexOf('.'),ga=0;if(fa==-1){ea+='.';ga=ca;}else ga=ca-(ea.length-fa-1);for(var ha=0,ia=ga;ha<ia;ha++)ea+='0';return ea;}var s=function(aa,ba){for(var ca=0;ca<ba;ca++)aa+='0';return aa;};function t(aa,ba){var ca=aa.indexOf('.'),da=ca===-1?aa:aa.slice(0,ca),ea=ca===-1?'':aa.slice(ca+1);return ba?da+'.'+s(ea.slice(0,ba),ba-ea.length):da;}var u={},v=function(aa){if(!u[aa])u[aa]=new RegExp('([^\\/p]|^)'+c('escapeRegex')(aa)+'(\\d*).*','i');return u[aa];};function w(aa,ba,ca){aa=aa.split('').map(function(ja){return (i.hasOwnProperty(ja)?i[ja]:ja);}).join('').trim();aa=aa.replace(/^[^\d]*\-/,'\u0002');aa=aa.replace(m,'');ca=ca||'';var da=c('escapeRegex')(ba),ea=c('escapeRegex')(ca),fa=l('^[^\\d]*\\d.*'+da+'.*\\d[^\\d]*$');if(!fa.test(aa)){var ga=l('(^[^\\d]*)'+da+'(\\d*[^\\d]*$)');if(ga.test(aa)){aa=aa.replace(ga,'$1\u0001$2');return x(aa);}var ha=l('^[^\\d]*[\\d '+c('escapeRegex')(ea)+']*[^\\d]*$');if(!ha.test(aa))aa='';return x(aa);}var ia=l('(^[^\\d]*[\\d '+ea+']*)'+da+'(\\d*[^\\d]*$)');aa=ia.test(aa)?aa.replace(ia,'$1\u0001$2'):'';return x(aa);}function x(aa){aa=aa.replace(/[^0-9\u0001\u0002]/g,'').replace('\u0001','.').replace('\u0002','-');var ba=Number(aa);return aa===''||isNaN(ba)?null:ba;}function y(aa){return w(aa,c('NumberFormatConfig').decimalSeparator||'.',c('NumberFormatConfig').numberDelimiter);}var z={formatNumber:o,formatNumberRaw:n,formatNumberWithThousandDelimiters:p,formatNumberWithLimitedSigFig:q,parseNumber:y,parseNumberRaw:w,getFloatString:function(aa,ba,ca){var da=String(aa),ea=da.split('.'),fa=z.getIntegerString(ea[0],ba);if(ea.length===1)return fa;return fa+ca+ea[1];},getIntegerString:function(aa,ba){var ca=String(aa),da=/(\d+)(\d{3})/;while(da.test(ca))ca=ca.replace(da,'$1'+ba+'$2');return ca;}};f.exports=z;},null);
__d('ads-lib-formatters',['fbt','Currency','NumberFormatConfig','intlNumUtils'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i='USD';function j(ga,ha,ia){ga=ga||'';ia=ia||'';ha=ha||ga.length;if(ga.length<=ha)return ga;var ja=ha-ia.length;if(ja)if(/[\uD800-\uDFFF]/.test(ga[ja-1]))ja+=1;return ga.substr(0,ja)+ia;}function k(ga,ha){if(ha===undefined||ha===null)ha='';return function(ia){return !ia?ha:j(ia,ga,'...');};}function l(ga,ha,ia,ja,ka){if(ga==='N/A')return ga;if(ha===undefined)ha=0;return c('intlNumUtils').formatNumberRaw(ga||0,ha,ia,ja,ka);}function m(ga){return function(ha){return l(ha,ga||0,',','.');};}function n(ga){return function(ha){return l(ha,ga||0,c('NumberFormatConfig').numberDelimiter,c('NumberFormatConfig').decimalSeparator,c('NumberFormatConfig').minDigitsForThousandsSeparator);};}function o(ga){return function(ha){return (c('intlNumUtils').formatNumberRaw(ha||'0',ga||0,c('NumberFormatConfig').numberDelimiter,c('NumberFormatConfig').decimalSeparator,c('NumberFormatConfig').minDigitsForThousandsSeparator));};}function p(ga,ha){return function(ia){return c('intlNumUtils').formatNumberWithLimitedSigFig(ia,ga,ha);};}function q(ga,ha){if(ha)return n(ga);return function(ia){return l(ia,ga||0,'',c('NumberFormatConfig').decimalSeparator,c('NumberFormatConfig').minDigitsForThousandsSeparator);};}function r(ga,ha){var ia=ha===false?1:100;return function(ja){return l(ja*ia,ga||0,',','.')+'%';};}function s(ga,ha){var ia=ha===false?1:100;return function(ja){return l(ja*ia,ga||0,c('NumberFormatConfig').numberDelimiter,c('NumberFormatConfig').decimalSeparator)+'%';};}function t(ga,ha,ia,ja,ka){if(ga===undefined)ga=2;var la=ja(ga);if(ia===undefined)ia=false;ha=ha||i;var ma=ha+'-'+ga+'-'+ia;if(!ka[ma]){var na=c('Currency').getFormat(ha)||c('Currency').getFormat(i),oa=c('Currency').getSymbol(ha)||c('Currency').getSymbol(i),pa=c('Currency').getOffset(ha)||c('Currency').getOffset(i);na=na.replace('{symbol}',oa);ka[ma]=function(qa){if(ia)qa=qa/pa;if(!(qa+'').match(/^\-?[\d\.,]*$/))return 'N/A';return na.replace('{amount}',la(qa));};}return ka[ma];}var u={};function v(ga,ha,ia){return t(ga,ha,ia,m,u);}var w={};function x(ga,ha,ia){return t(ga,ha,ia,n,w);}function y(ga,ha){if(ha)return c('intlNumUtils').parseNumberRaw(ga+'',ha,c('NumberFormatConfig').numberDelimiter);return c('intlNumUtils').parseNumber(ga+'');}function z(){return function(ga){return l(ga,0,',','.')+'%';};}function aa(){return function(ga){return l(ga,0,c('NumberFormatConfig').numberDelimiter,c('NumberFormatConfig').decimalSeparator)+'%';};}function ba(ga){var ha=ga.currency(),ia=ga.offset()==100?2:0;return v(ia,ha);}function ca(ga,ha){var ia=ga.currency(),ja=ga.offset()==100?2:0;return x(ja,ia,ha);}function da(ga){var ha=[];if(ga.countries&&ga.countries.length)ha.push(ga.countries);if(ga.cities&&ga.cities.length)ha.push(ga.cities.map(function(ia){return ia.name;}));if(ga.zips&&ga.zips.length)ha.push(ga.zips.map(function(ia){return ia.name;}));if(ga.regions&&ga.regions.length)ha.push(ga.regions.map(function(ia){return ia.name;}));return ha.join('; ').replace(/,/g,', ');}function ea(ga,ha){if(ga||ha){ga=ga||h._("All");ha=ha||h._("All");return ga+'&ndash;'+ha;}return 'Any';}function fa(ga){ga=ga+'';if(ga==='0'){return h._("All");}else if(ga==='1')return h._("Men");return h._("Women");}g.geoLocation=da;g.age=ea;g.sex=fa;g.createTextTruncator=k;g.chopString=j;g.parseNumber=y;g.formatNumber=l;g.createIntlNumberFormatter=n;g.createIntlLongNumberFormatter=o;g.createLimitedSigFigNumberFormatter=p;g.createMaybeDelimitedNumberFormatter=q;g.createIntlPercentFormatter=s;g.createIntlMoneyFormatter=x;g.createIntlMoneyFormatterForAccount=ca;g.createIntlInflationFormatter=aa;g.createNumberFormatter=m;g.createPercentFormatter=r;g.createMoneyFormatter=v;g.createMoneyFormatterForAccount=ba;g.createInflationFormatter=z;},null);
__d('PaymentMethodUtils',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h=16,i=4,j=[{pattern:/^5[1-5]/,name:'mc',cscDigits:3,digits:16,supported:true,code:77},{pattern:/^4/,name:'visa',cscDigits:3,digits:16,supported:true,code:86},{pattern:/^3[47]/,name:'amex',cscDigits:4,digits:15,supported:true,code:65},{pattern:/^35(2[8-9]|[3-8])/,name:'jcb',cscDigits:3,digits:16,supported:true,code:74},{pattern:/^(6011|65|64[4-9]|622([2-8]|1[3-9]|12[6-9]|9[0-1]|92[0-5]))/,name:'disc',cscDigits:3,digits:16,supported:true,code:68},{pattern:/^30[0-5]/,name:'diners',digits:14,cscDigits:3,supported:false,code:64},{name:'unknown',digits:16,cscDigits:3,supported:false,code:85}],k=function(m){return m.replace(/[iIl]/g,'1').replace(/[Oo]/g,'0').replace(/[^\d]/gi,'');},l={getCardType:function(m){m=k(m);m=m.substr(0,6);for(var n=0;n<j.length;n++)if(m.match(j[n].pattern))return j[n];},getCardTypeFromCode:function(m){for(var n=0;n<j.length;n++)if(m==j[n].code)return j[n];return null;},isValidCCNumber:function(m){m=k(m);var n=l.getCardType(m);if(n.digits!==m.length)return false;if(!n.supported)return false;return l.isValidLuhn(m);},isValidLuhn:function(m){m=k(m);var n=m.split('').reverse(),o='';for(var p=0;p<n.length;p++){var q=parseInt(n[p],10);if(p%2!==0)q=q*2;o=o+q;}var r=0;for(p=0;p<o.length;p++)r=r+parseInt(o.charAt(p),10);return !!(r!==0&&r%10===0);},getMaxCardLength:function(m){return h;},getMaxCSCLength:function(){return i;}};f.exports=l;},null);
__d('PaymentTokenProxyUtils',['CurrentEnvironment','URI'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={getURI:function(i){var j=new (c('URI'))('/ajax/payment/token_proxy.php').setDomain(window.location.hostname).setProtocol('https').addQueryData(i),k=j.getDomain().split('.');if(k.indexOf('secure')<0){k.splice(1,0,'secure');j.setDomain(k.join('.'));}if(c('CurrentEnvironment').messengerdotcom){var l=j.getDomain();l=l.replace('messenger.com','facebook.com');j.setDomain(l);}return j;}};f.exports=h;},null);
__d('ShareDialogAudienceTypes',['getObjectValues','ShareModeConst'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={OWN:c('ShareModeConst').SELF_POST,PERSON:c('ShareModeConst').FRIEND,GROUP:c('ShareModeConst').GROUP,EVENT:c('ShareModeConst').EVENT,PAGE:c('ShareModeConst').PAGE,MESSAGE:c('ShareModeConst').MESSAGE},i=c('getObjectValues')(h);function j(k){return i.some(function(l){return l===k;});}f.exports=h;f.exports.ALL=i;f.exports.isValid=j;f.exports.propType=function(k,l){if(!j(k[l]))throw new Error('Invalid audience '+k[l]);};},null);
__d("XPaymentsCreditCardMutatorController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/payments\/credit_card\/mutator\/{mutation_type}\/",{mutation_type:{type:"Enum",required:true,enumType:1}});},null);
__d("XShareDialogSubmitController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/share\/dialog\/submit\/",{post_id:{type:"Int"},share_type:{type:"Int"},url:{type:"String"},audience_type:{type:"String"},owner_id:{type:"Int"},app_id:{type:"Int"},message:{type:"String"},shared_ad_id:{type:"Int"},sharer_id:{type:"Int"},source:{type:"String"},composer_session_id:{type:"String"},audience_targets:{type:"IntVector"},ephemeral_ttl_mode:{type:"Int"},tagged_people:{type:"IntVector"},tagged_place:{type:"Int"},tagged_action:{type:"Int"},tagged_object:{type:"Int"},tagged_object_str:{type:"String"},tagged_action_icon:{type:"Int"},tagged_feed_topics:{type:"StringVector"},attribution:{type:"Int"},privacy:{type:"String"},messaging_tags:{type:"StringVector"},internalextra:{type:"StringToStringMap"},internal_preview_image_id:{type:"Int"},share_now:{type:"Bool",defaultValue:false},is_forced_reshare_of_post:{type:"Bool",defaultValue:false},targeted_privacy_data:{type:"HackType"},unpublished_content_type:{type:"Enum",enumType:0},share_to_group_as_page:{type:"Bool",defaultValue:false}});},null);