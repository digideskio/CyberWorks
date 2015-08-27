<?php
function carName($class)
{
    $car['C_Offroad_01_F'] = 'Offroad';
    $car['C_SUV_01_F'] = 'SUV';
    $car['C_Offroad_01_repair_F'] = 'Offroad (Repair)';
    $car['O_Heli_Light_02_unarmed_F'] = 'PO-30 Orca';
    $car['C_Heli_Light_01_civil_F'] = 'M-900';
    $car['B_Quadbike_01_F'] = 'Quadbike';
    $car['C_Hatchback_01_F'] = 'Hatchback';
    $car['C_Hatchback_01_sport_F'] = 'Hatchback Sport';
    $car['C_Van_01_transport_F'] = 'Truck';
    $car['C_Van_01_box_F'] = 'Truck Boxer';
    $car['C_Van_01_fuel_F'] = 'Fuel Truck';
    $car['I_Truck_02_transport_F'] = 'Zamak Transport';
    $car['O_Truck_03_transport_F'] = 'Tempest Transport';
    $car['B_Truck_01_transport_F'] = 'HEMTT Transport';
    $car['O_Truck_02_covered_F'] = 'Zamak Transport (Covered)';
    $car['O_Truck_03_covered_F'] = 'Tempest Transport (Covered)';
    $car['B_Truck_01_covered_F'] = 'HEMTT Transport (Covered)';
    $car['B_Truck_01_box_F'] = 'HEMTT Box';
    $car['O_Truck_03_ammo_F'] = 'Tempest Ammo';
    $car['I_Truck_02_fuel_F'] = 'Zamak Fuel';
    $car['O_Truck_03_fuel_F'] = 'Tempest Fuel';
    $car['B_Truck_01_fuel_F'] = 'HEMTT Fuel';
    $car['O_Truck_03_device_F'] = 'Tempest (Device)';
    $car['I_Heli_Transport_02_F'] = 'CH-49 Mohawk';
    $car['O_Heli_Transport_04_F'] = 'Mi-290 Taru';
    $car['O_Heli_Transport_04_covered_F'] = 'Mi-290 Taru (Transport)';
    $car['O_Heli_Transport_04_box_F'] = 'Mi-290 Taru (Cargo)';
    $car['O_Heli_Transport_04_fuel_F'] = 'Mi-290 Taru (Fuel)';
    $car['C_Rubberboat'] = 'Rescue Boat';
    $car['C_Boat_Civil_01_F'] = 'Motorboat';
    $car['B_SDV_01_F'] = 'SDV (Submarine)';
    $car['B_G_Offroad_01_F'] = 'Offroad';
    $car['B_Heli_Light_01_F'] = 'MH-9 Hummingbird';
    $car['O_MRAP_02_F'] = 'Ifrit';
    $car['B_G_Offroad_01_armed_F'] = 'Offroad (Armed)';
    $car['O_Heli_Transport_04_bench_F'] = 'Mi-290 Taru (Bench)';
    $car['O_Heli_Attack_02_black_F'] = 'Mi-48 Kajman (Black)';
    $car['B_MRAP_01_F'] = 'Hunter';
    $car['I_MRAP_03_F'] = 'Strider';
    $car['B_MRAP_01_hmg_F'] = 'Hunter HMG';
    $car['I_Heli_light_03_unarmed_F'] = 'WY-55 Hellcat (Green)';
    $car['I_Heli_light_03_F'] = 'WY-55 Hellcat';
    $car['B_Heli_Transport_01_F'] = 'UH-80 Ghost Hawk';
    $car['B_Heli_Transport_03_F'] = 'CH-67 Huron';
    $car['B_Heli_Transport_03_unarmed_F'] = 'CH-67 Huron (Black)';
    $car['B_Boat_Transport_01_F'] = 'Assault Boat';
    $car['C_Boat_Civil_01_police_F'] = 'Motorboat (Police)';
    $car['B_Boat_Armed_01_minigun_F'] = 'Speedboat Minigun';
    $car['O_Truck_02_Fuel_F'] = 'Zamak Fuel';
    $car['O_Truck_03_fuel_F'] = 'Tempest Fuel';
    $car['B_Truck_01_ammo_F'] = 'HEMTT Ammo';
    $car['O_Truck_02_box_F'] = 'Zamak Repair';
    $car['O_Heli_Transport_04_medevac_F'] = 'Mi-290 Taru (Medical)';
    $car['O_Boat_Armed_01_hmg_F'] = 'Speedboat HMG';
    $car['I_MRAP_03_hmg_F'] = 'Strider HMG';
    $car['O_MRAP_02_hmg_F'] = 'Ifrit HMG';
    $car['O_Truck_03_Ammo_F'] = 'Tempest Ammo';
    $car['Box_IND_AmmoVeh_F'] = 'Box_IND_AmmoVeh_F';
    $car['B_Slingload_01_Cargo_F'] = 'B_Slingload_01_Cargo_F';
    $car['C_supplyCrate_F'] = 'C_supplyCrate_F';
    $car['B_Heli_Attack_01_F'] = 'AH-99 Blackfoot';
    $car['B_Truck_01_medical_F'] = 'Hemmt Medic';
    $car['O_Truck_03_medical_F'] = 'Tempest Medic';
    $car['I_APC_Wheeled_03_cannon_F'] = 'Marid';
    $car['O_APC_Wheeled_02_rcws_F'] = 'Marid Cop';
    $car['I_Truck_02_covered_F'] = 'Zamak Abgedeckt';
    $car['B_Truck_01_mover_F'] = 'Hemmt Mover';
    $car['O_MRAP_02_gmg_F'] = 'Marid';
    $car['I_APC_Wheeled_03_cannon_F'] = 'iFRIT GMG';
    $car['C_Kart_01_Vrana_F'] = 'Kart Vrana';
    $car['C_Kart_01_F'] = 'Kart';
    $car['C_Kart_01_Fuel_F'] = 'Kart Fuel';
    $car['C_Kart_01_Blue_F'] = 'Kart Blue';
    $car['C_Kart_01_Green_F'] = 'Kart Green';
    $car['C_Kart_01_Orange_F'] = 'Kart Orange';
    $car['C_Kart_01_White_F'] = 'Kart White';
    $car['C_Kart_01_Yellow_F'] = 'Kart Yellow';
    $car['C_Kart_01_Black_F'] = 'Kart Black';
    $car['C_Kart_01_Red_F'] = 'Kart Red';
    $car['O_Truck_02_Ammo_F'] = 'Zamak Ammo';
    $car['Exile_Chopper_Hummingbird_Green'] = 'Green Hummingbird';
    if (isset($car[$class])) {
        return $car[$class];
    } else {
        return $class;
    }
    }