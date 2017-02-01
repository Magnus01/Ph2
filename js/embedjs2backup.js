var listSumVisualizer = new ExecutionVisualizer('VisualDebug', listSumTrace, {embeddedMode: true, heightChangeCallback: redrawAllVisualizerArrows});
        
        function redrawAllVisualizerArrows() {
            if (listSumVisualizer) listSumVisualizer.redrawConnectors();
            //if (hanoiVisualizer) hanoiVisualizer.redrawConnectors();
            // if (happyVisualizer) happyVisualizer.redrawConnectors();
        }
        
        $(window).resize(redrawAllVisualizerArrows);
        redrawAllVisualizerArrows();