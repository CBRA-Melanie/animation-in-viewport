# animation-in-viewport
Contact-teaser Block from Cbra, animation that plays only when in viewport

Inspiration: https://codepen.io/susma/pen/PBVLgp

Man fügt eine animation ein, mit stroke-dashoffset und gibt dann jeder einzelnen Line mit einer Class oder ID ein stroke-dasharray und offset mit. 

Damit die Animation immer nur im Viewport spielt (und auch wieder neu startet, wenn man ihn verlässt) hab ich den Constructor "IntersectionObserver"
verwendet und dem eine function mitgegeben. Ganz unten muss ich dem observer dann mitgeben, welcher Bereich observed werden soll. Sobald dieser Bereich 
dann im Viewport ist (observed wird) frage ich mit .isIntersecting ab ob es da ist, und wenn JA dann füg ich dem arrow die Klasse .arrow-animation 
hinzu. Wenn nicht, soll die Klasse entfernt werden. Im CSS füg ich dann in der Animation immer die Klasse .arrow-animation hinzu, damit das auch NUR
mit der Klasse abgespielt wird.
