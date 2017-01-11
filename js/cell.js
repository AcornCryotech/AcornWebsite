var animData = {
        wrapper: document.getElementById('cell'),
    	animType: 'html',
    	prerender: true,
        loop: true,
        autoplay: true,
        animationData: JSON.parse('../animations/cell.json')
    };
    var anim = bodymovin.loadAnimation(animData);