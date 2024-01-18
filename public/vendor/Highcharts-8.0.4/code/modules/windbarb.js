/*
 Highcharts JS v8.0.4 (2020-03-10)

 Wind barb series module

 (c) 2010-2019 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/modules/windbarb",["highcharts"],function(k){a(k);a.Highcharts=k;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function k(a,g,k,n){a.hasOwnProperty(g)||(a[g]=n.apply(null,k))}a=a?a._modules:{};k(a,"mixins/on-series.js",[a["parts/Globals.js"],a["parts/Utilities.js"]],function(a,g){var k=g.defined,t=g.stableSort,u=a.seriesTypes;
return{getPlotBox:function(){return a.Series.prototype.getPlotBox.call(this.options.onSeries&&this.chart.get(this.options.onSeries)||this)},translate:function(){u.column.prototype.translate.apply(this);var a=this,l=a.options,f=a.chart,h=a.points,e=h.length-1,c,b=l.onSeries;b=b&&f.get(b);l=l.onKey||"y";var d=b&&b.options.step,g=b&&b.points,p=g&&g.length,n=f.inverted,r=a.xAxis,x=a.yAxis,v=0,q;if(b&&b.visible&&p){v=(b.pointXOffset||0)+(b.barW||0)/2;f=b.currentDataGrouping;var y=g[p-1].x+(f?f.totalRange:
0);t(h,function(b,c){return b.x-c.x});for(l="plot"+l[0].toUpperCase()+l.substr(1);p--&&h[e];){var m=g[p];f=h[e];f.y=m.y;if(m.x<=f.x&&"undefined"!==typeof m[l]){if(f.x<=y&&(f.plotY=m[l],m.x<f.x&&!d&&(q=g[p+1])&&"undefined"!==typeof q[l])){var w=(f.x-m.x)/(q.x-m.x);f.plotY+=w*(q[l]-m[l]);f.y+=w*(q.y-m.y)}e--;p++;if(0>e)break}}}h.forEach(function(b,d){b.plotX+=v;if("undefined"===typeof b.plotY||n)0<=b.plotX&&b.plotX<=r.len?n?(b.plotY=r.translate(b.x,0,1,0,1),b.plotX=k(b.y)?x.translate(b.y,0,0,0,1):0):
b.plotY=(r.opposite?0:a.yAxis.len)+r.offset:b.shapeArgs={};if((c=h[d-1])&&c.plotX===b.plotX){"undefined"===typeof c.stackIndex&&(c.stackIndex=0);var e=c.stackIndex+1}b.stackIndex=e});this.onSeries=b}}});k(a,"modules/windbarb.src.js",[a["parts/Globals.js"],a["parts/Utilities.js"],a["mixins/on-series.js"]],function(a,g,k){function n(){a.approximations&&!a.approximations.windbarb&&(a.approximations.windbarb=function(h,e){var c=0,b=0,d,f=h.length;for(d=0;d<f;d++)c+=h[d]*Math.cos(e[d]*a.deg2rad),b+=h[d]*
Math.sin(e[d]*a.deg2rad);return[h.reduce(function(b,c){return b+c},0)/h.length,Math.atan2(b,c)/a.deg2rad]})}var u=g.animObject,t=g.isNumber,l=g.pick;g=g.seriesType;var f=a.noop;n();g("windbarb","column",{dataGrouping:{enabled:!0,approximation:"windbarb",groupPixelWidth:30},lineWidth:2,onSeries:null,states:{hover:{lineWidthPlus:0}},tooltip:{pointFormat:'<span style="color:{point.color}">\u25cf</span> {series.name}: <b>{point.value}</b> ({point.beaufort})<br/>'},vectorLength:20,colorKey:"value",yOffset:-20,
xOffset:0},{pointArrayMap:["value","direction"],parallelArrays:["x","value","direction"],beaufortName:"Calm;Light air;Light breeze;Gentle breeze;Moderate breeze;Fresh breeze;Strong breeze;Near gale;Gale;Strong gale;Storm;Violent storm;Hurricane".split(";"),beaufortFloor:[0,.3,1.6,3.4,5.5,8,10.8,13.9,17.2,20.8,24.5,28.5,32.7],trackerGroups:["markerGroup"],init:function(h,e){n();a.Series.prototype.init.call(this,h,e)},pointAttribs:function(a,e){var c=this.options;a=a.color||this.color;var b=this.options.lineWidth;
e&&(a=c.states[e].color||a,b=(c.states[e].lineWidth||b)+(c.states[e].lineWidthPlus||0));return{stroke:a,"stroke-width":b}},markerAttribs:function(){},getPlotBox:k.getPlotBox,windArrow:function(a){var e=1.943844*a.value,c=this.options.vectorLength/20,b=-10;if(a.isNull)return[];if(0===a.beaufortLevel)return this.chart.renderer.symbols.circle(-10*c,-10*c,20*c,20*c);a=["M",0,7*c,"L",-1.5*c,7*c,0,10*c,1.5*c,7*c,0,7*c,0,-10*c];var d=(e-e%50)/50;if(0<d)for(;d--;)a.push(-10===b?"L":"M",0,b*c,"L",5*c,b*c+
2,"L",0,b*c+4),e-=50,b+=7;d=(e-e%10)/10;if(0<d)for(;d--;)a.push(-10===b?"L":"M",0,b*c,"L",7*c,b*c),e-=10,b+=3;d=(e-e%5)/5;if(0<d)for(;d--;)a.push(-10===b?"L":"M",0,b*c,"L",4*c,b*c),e-=5,b+=3;return a},translate:function(){var a=this.beaufortFloor,e=this.beaufortName;k.translate.call(this);this.points.forEach(function(c){for(var b=0;b<a.length&&!(a[b]>c.value);b++);c.beaufortLevel=b-1;c.beaufort=e[b-1]})},drawPoints:function(){var a=this.chart,e=this.yAxis,c=a.inverted,b=this.options.vectorLength/
2;this.points.forEach(function(d){var f=d.plotX,g=d.plotY;!1===this.options.clip||a.isInsidePlot(f,0,!1)?(d.graphic||(d.graphic=this.chart.renderer.path().add(this.markerGroup).addClass("highcharts-point highcharts-color-"+l(d.colorIndex,d.series.colorIndex))),d.graphic.attr({d:this.windArrow(d),translateX:f+this.options.xOffset,translateY:g+this.options.yOffset,rotation:d.direction}),this.chart.styledMode||d.graphic.attr(this.pointAttribs(d))):d.graphic&&(d.graphic=d.graphic.destroy());d.tooltipPos=
[f+this.options.xOffset+(c&&!this.onSeries?b:0),g+this.options.yOffset-(c?0:b+e.pos-a.plotTop)]},this)},animate:function(a){a?this.markerGroup.attr({opacity:.01}):this.markerGroup.animate({opacity:1},u(this.options.animation))},invertGroups:f,getExtremes:f},{isValid:function(){return t(this.value)&&0<=this.value}});""});k(a,"masters/modules/windbarb.src.js",[],function(){})});
//# sourceMappingURL=windbarb.js.map