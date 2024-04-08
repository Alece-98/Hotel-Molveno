<x-MasterLayout>
    <title>Kamer Info</title>
    <style>
        .container {
            display: flex;
            padding-top: 20px;
            
        }
        .info-group {
            display: flex;
            flex-direction: column;
            margin-left: 20px;
        }
        .info-group.right {
            align-items: left; 
            margin-left: 100px;
            
        }

        .info-item {
            display: flex;
            align-items: center; 
        }

        .info-label {
            width: 200px; 
        }
        
    </style>
</head>
<body>
<div class="container">
        <div class="info-group left">
            <div class="info-item"><span class="info-label">Room Number:</span><span class="info-value">{{ $room->room_number }}</span></div>
            <div class="info-item"><span class="info-label">Room Class:</span><span class="info-value">{{ $room->room_type }}</span></div>
            <div class="info-item"><span class="info-label">Room View:</span><span class="info-value">{{ $room->room_view }}</span></div>
            <div class="info-item"><span class="info-label">Max Guests:</span><span class="info-value">{{ $room->room_capacity }}</span></div>
            <div class="info-item"><span class="info-label">Type of Beds:</span><span class="info-value">{{ $room->bed_description }}</span></div>
        </div>
        <div class="info-group right">
            <div class="info-item"><span class="info-label">Possibility for Baby Bed:</span><span class="info-value">{{ $room->baby_bed }}</span></div>
            <div class="info-item"><span class="info-label">Handicap Accessible:</span><span class="info-value">{{ $room->handicap_accessible }}</span></div>
            <div class="info-item"><span class="info-label">Room Price:</span><span class="info-value">€{{ $room->price_per_night }}</span></div>
        </div>
    </div>
</body>
</html>
</x-MasterLayout>

