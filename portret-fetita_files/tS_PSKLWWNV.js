/*!CK:1260291767!*//*1457920575,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["eBAbR"]); }

__d('UFIReactionsStandalone.react',['React','UFICallbackStore','UFICentralUpdates','UFIConfig','UFIConstants','UFIDispatcher','UFIDispatcherContext.react','UFIFeedbackContext.react','UFIReactionsLinkImpl.react'],function a(b,c,d,e,f,g){var h,i;if(c.__markCompiled)c.__markCompiled();h=babelHelpers.inherits(j,c('React').Component);i=h&&h.prototype;j.prototype.componentWillMount=function(){'use strict';this.$UFIReactionsStandalone1=new (c('UFIDispatcher'))();this.$UFIReactionsStandalone2={UFICallbackStore:new (c('UFICallbackStore'))(this.$UFIReactionsStandalone1)};c('UFICentralUpdates').handleUpdate(c('UFIConstants').UFIPayloadSourceType.INITIAL_SERVER,this.props.payload);};j.prototype.componentWillUnmount=function(){'use strict';this.$UFIReactionsStandalone2.UFICallbackStore.remove();this.$UFIReactionsStandalone2={};this.$UFIReactionsStandalone1=null;};j.prototype.render=function(){'use strict';return (c('React').createElement(c('UFIDispatcherContext.react'),{dispatcher:this.$UFIReactionsStandalone1,stores:this.$UFIReactionsStandalone2},c('React').createElement(c('UFIFeedbackContext.react'),{contextArgs:this.props.contextArgs,render:function(k,l){return (c('React').createElement(c('UFIReactionsLinkImpl.react'),{hasNUX:c('UFIConfig').hasReactionsNUX&&!l.hasviewerliked,id:k.ftentidentifier,reaction:l.viewerreaction,supportedReactions:l.supportedreactions}));}})));};function j(){'use strict';h.apply(this,arguments);}f.exports=j;},null);