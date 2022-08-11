<!DOCTYPE html>
<html>
<head>
    <script src="jquery-3.6.0.js"></script>
    <script src="js/chessboard-1.0.0.js"></script>
    <link rel="stylesheet" href="css/chessboard-1.0.0.css">
</head>
<body>
    <div id="board1" style="width: 70%"></div>
    <button id="clearBoardBtn">Clear Board</button>
    <button id="startPositionBtn">Start Position</button>
    <button id="clearBoardInstantBtn">Clear Board Instant</button>
    <script>
        
        //configs
        var config = {
            position: 'start',
            draggable: true,
            dropOffBoard: 'snapback',
            sparePieces: true
        }

        //initialize
        var board1 = ChessBoard('board1', config);

        //buttons
        $('#clearBoardBtn').on('click', board1.clear)
        $('#startPositionBtn').on('click', board1.start)
        $('#clearBoardInstantBtn').on('click', function () {board1.clear(false)})
    </script>
</body>
</html>