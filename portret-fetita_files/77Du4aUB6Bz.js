/*!CK:857382851!*//*1455468998,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["dUkC9"]); }

__d('ReactComposerAlbumActions',['ReactComposerAlbumActionType','ReactComposerDispatcher'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();h.prototype.selectorClicked=function(i){'use strict';c('ReactComposerDispatcher').dispatch({composerID:i,type:c('ReactComposerAlbumActionType').CREATE_ALBUM_SELECTOR_CLICKED});};function h(){'use strict';}f.exports=new h();},null);
__d('ReactComposerAlbumAttachmentSelector.react',['ReactComposerAlbumActions','ReactComposerContextMixin','DOMContainer.react','ReactComponentWithPureRenderMixin','React'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h=c('React').PropTypes,i=c('React').createClass({displayName:'ReactComposerAlbumAttachmentSelector',mixins:[c('ReactComposerContextMixin'),c('ReactComponentWithPureRenderMixin')],propTypes:{createAlbumLink:h.any},render:function(){return (c('React').createElement(c('DOMContainer.react'),{display:'block',onClick:this._onClick},this.props.createAlbumLink));},_onClick:function(){c('ReactComposerAlbumActions').selectorClicked(this.context.composerID);}});f.exports=i;},null);