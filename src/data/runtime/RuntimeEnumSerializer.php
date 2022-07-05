<?php

declare(strict_types=1);

namespace pocketmine\data\runtime;

/**
 * This class is auto-generated. Do not edit it manually.
 * @see build/generate-runtime-enum-serializers.php
 */
final class RuntimeEnumSerializer{

	public static function writeBellAttachmentType(RuntimeDataWriter $w, \pocketmine\block\utils\BellAttachmentType $value) : void{
		$w->writeInt(2, match($value){
			\pocketmine\block\utils\BellAttachmentType::CEILING() => 0,
			\pocketmine\block\utils\BellAttachmentType::FLOOR() => 1,
			\pocketmine\block\utils\BellAttachmentType::ONE_WALL() => 2,
			\pocketmine\block\utils\BellAttachmentType::TWO_WALLS() => 3,
			default => throw new \pocketmine\utils\AssumptionFailedError("All BellAttachmentType cases should be covered")
		});
	}

	public static function writeCoralType(RuntimeDataWriter $w, \pocketmine\block\utils\CoralType $value) : void{
		$w->writeInt(3, match($value){
			\pocketmine\block\utils\CoralType::BRAIN() => 0,
			\pocketmine\block\utils\CoralType::BUBBLE() => 1,
			\pocketmine\block\utils\CoralType::FIRE() => 2,
			\pocketmine\block\utils\CoralType::HORN() => 3,
			\pocketmine\block\utils\CoralType::TUBE() => 4,
			default => throw new \pocketmine\utils\AssumptionFailedError("All CoralType cases should be covered")
		});
	}

	public static function writeDyeColor(RuntimeDataWriter $w, \pocketmine\block\utils\DyeColor $value) : void{
		$w->writeInt(4, match($value){
			\pocketmine\block\utils\DyeColor::BLACK() => 0,
			\pocketmine\block\utils\DyeColor::BLUE() => 1,
			\pocketmine\block\utils\DyeColor::BROWN() => 2,
			\pocketmine\block\utils\DyeColor::CYAN() => 3,
			\pocketmine\block\utils\DyeColor::GRAY() => 4,
			\pocketmine\block\utils\DyeColor::GREEN() => 5,
			\pocketmine\block\utils\DyeColor::LIGHT_BLUE() => 6,
			\pocketmine\block\utils\DyeColor::LIGHT_GRAY() => 7,
			\pocketmine\block\utils\DyeColor::LIME() => 8,
			\pocketmine\block\utils\DyeColor::MAGENTA() => 9,
			\pocketmine\block\utils\DyeColor::ORANGE() => 10,
			\pocketmine\block\utils\DyeColor::PINK() => 11,
			\pocketmine\block\utils\DyeColor::PURPLE() => 12,
			\pocketmine\block\utils\DyeColor::RED() => 13,
			\pocketmine\block\utils\DyeColor::WHITE() => 14,
			\pocketmine\block\utils\DyeColor::YELLOW() => 15,
			default => throw new \pocketmine\utils\AssumptionFailedError("All DyeColor cases should be covered")
		});
	}

	public static function writeLeverFacing(RuntimeDataWriter $w, \pocketmine\block\utils\LeverFacing $value) : void{
		$w->writeInt(3, match($value){
			\pocketmine\block\utils\LeverFacing::DOWN_AXIS_X() => 0,
			\pocketmine\block\utils\LeverFacing::DOWN_AXIS_Z() => 1,
			\pocketmine\block\utils\LeverFacing::EAST() => 2,
			\pocketmine\block\utils\LeverFacing::NORTH() => 3,
			\pocketmine\block\utils\LeverFacing::SOUTH() => 4,
			\pocketmine\block\utils\LeverFacing::UP_AXIS_X() => 5,
			\pocketmine\block\utils\LeverFacing::UP_AXIS_Z() => 6,
			\pocketmine\block\utils\LeverFacing::WEST() => 7,
			default => throw new \pocketmine\utils\AssumptionFailedError("All LeverFacing cases should be covered")
		});
	}

	public static function writeMushroomBlockType(RuntimeDataWriter $w, \pocketmine\block\utils\MushroomBlockType $value) : void{
		$w->writeInt(4, match($value){
			\pocketmine\block\utils\MushroomBlockType::ALL_CAP() => 0,
			\pocketmine\block\utils\MushroomBlockType::CAP_EAST() => 1,
			\pocketmine\block\utils\MushroomBlockType::CAP_MIDDLE() => 2,
			\pocketmine\block\utils\MushroomBlockType::CAP_NORTH() => 3,
			\pocketmine\block\utils\MushroomBlockType::CAP_NORTHEAST() => 4,
			\pocketmine\block\utils\MushroomBlockType::CAP_NORTHWEST() => 5,
			\pocketmine\block\utils\MushroomBlockType::CAP_SOUTH() => 6,
			\pocketmine\block\utils\MushroomBlockType::CAP_SOUTHEAST() => 7,
			\pocketmine\block\utils\MushroomBlockType::CAP_SOUTHWEST() => 8,
			\pocketmine\block\utils\MushroomBlockType::CAP_WEST() => 9,
			\pocketmine\block\utils\MushroomBlockType::PORES() => 10,
			default => throw new \pocketmine\utils\AssumptionFailedError("All MushroomBlockType cases should be covered")
		});
	}

	public static function writeSkullType(RuntimeDataWriter $w, \pocketmine\block\utils\SkullType $value) : void{
		$w->writeInt(3, match($value){
			\pocketmine\block\utils\SkullType::CREEPER() => 0,
			\pocketmine\block\utils\SkullType::DRAGON() => 1,
			\pocketmine\block\utils\SkullType::PLAYER() => 2,
			\pocketmine\block\utils\SkullType::SKELETON() => 3,
			\pocketmine\block\utils\SkullType::WITHER_SKELETON() => 4,
			\pocketmine\block\utils\SkullType::ZOMBIE() => 5,
			default => throw new \pocketmine\utils\AssumptionFailedError("All SkullType cases should be covered")
		});
	}

	public static function writeSlabType(RuntimeDataWriter $w, \pocketmine\block\utils\SlabType $value) : void{
		$w->writeInt(2, match($value){
			\pocketmine\block\utils\SlabType::BOTTOM() => 0,
			\pocketmine\block\utils\SlabType::DOUBLE() => 1,
			\pocketmine\block\utils\SlabType::TOP() => 2,
			default => throw new \pocketmine\utils\AssumptionFailedError("All SlabType cases should be covered")
		});
	}

}