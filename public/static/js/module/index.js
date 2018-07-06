layui.define(['layer', 'form', 'element', 'carousel'], function (exports) {
	var layer = layui.layer,
	form = layui.form,
	elememt = layui.element,
	carousel = layui.carousel;

	carousel.render({
		elem : '#banner',
		width : '100%',
		height : '360px',
		arrow : 'hover',
		anim : 'fade',
		indicator : 'inside'
	});


	exports('index', {});
});

console.log("一行代码，一行诗---PGL是一位程序员");