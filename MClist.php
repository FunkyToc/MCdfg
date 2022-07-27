<?php 

namespace Minecraft\Tools;

class MClist 
{

	// __________________________
	// ________ NUMERIC _________
	// __________________________

	const NUMERIC_0_9 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	const NUMERIC_1_9 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	const NUMERIC_0_10 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	const NUMERIC_1_10 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	const NUMERIC_0_15 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
	const NUMERIC_1_15 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
	const NUMERIC_0_20 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20];
	const NUMERIC_1_20 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20];
	const NUMERIC_0_30 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
	const NUMERIC_1_30 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
	const NUMERIC_0_50 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50];
	const NUMERIC_1_50 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50];
	const NUMERIC_0_60 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60];
	const NUMERIC_1_60 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 ,19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60];
	const NUMERIC_9_35 = [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35];


	// __________________________
	// _________ MOB _________
	// __________________________

	const MOB_ALL = ['axolotl', 'bat', 'bee', 'blaze', 'cat', 'cave_spider', 'chicken', 'cod', 'cow', 'creeper', 'dolphin', 'donkey', 'drowned', 'elder_guardian', 'ender_dragon', 'enderman', 'endermite', 'evoker', 'fox', 'ghast', 'giant', 'guardian', 'hoglin', 'horse', 'husk', 'illusioner', 'iron_golem', 'llama', 'magma_cube', 'mule', 'mooshroom', 'ocelot', 'panda', 'parrot', 'phantom', 'pig', 'piglin', 'piglin_brute', 'pillager', 'polar_bear', 'pufferfish', 'rabbit', 'ravager', 'salmon', 'sheep', 'shulker', 'silverfish', 'skeleton', 'skeleton_horse', 'slime', 'snow_golem', 'spider', 'squid', 'stray', 'strider', 'trader_llama', 'tropical_fish', 'turtle', 'vex', 'villager', 'vindicator', 'wandering_trader', 'witch', 'wither', 'wither_skeleton', 'wolf', 'zoglin', 'zombie', 'zombie_horse', 'zombie_villager', 'zombified_piglin'];
	const MOB_HOSTILE = ['blaze', 'cave_spider', 'creeper', 'drowned', 'elder_guardian', 'ender_dragon', 'endermite', 'evoker', 'ghast', 'giant', 'guardian', 'hoglin', 'husk', 'illusioner', 'magma_cube', 'phantom', 'piglin', 'piglin_brute', 'pillager', 'pufferfish', 'ravager', 'shulker', 'silverfish', 'skeleton', 'slime', 'spider', 'stray', 'strider', 'vex', 'villager', 'vindicator', 'witch', 'wither', 'zoglin', 'zombie', 'zombified_piglin'];
	const MOB_PASSIVE = ['axolotl', 'bat', 'bee', 'cat', 'chicken', 'cod', 'cow', 'dolphin', 'donkey', 'enderman', 'fox', 'goat', 'horse', 'iron_golem', 'llama', 'mooshroom', 'mule', 'ocelot', 'panda', 'parrot', 'pig', 'polar_bear', 'rabbit', 'salmon', 'sheep', 'squid', 'strider', 'trader_llama', 'tropical_fish', 'turtle', 'villager', 'wandering_trader', 'wolf'];
	const MOB_HUMAN = ['pillager', 'villager', 'vindicator', 'wandering_trader'];
	const ENTITY_NOT_MOB = ['area_effect_cloud', 'armor_stand', 'arrow', 'boat', 'dragon_fireball', 'end_crystal', 'evoker_fangs', 'experience_orb', 'eye_of_ender', 'falling_block', 'firework_rocket', 'fishing_bobber', 'item', 'item_frame', 'fireball', 'leash_knot', 'lightning_bolt', 'llama_spit', 'minecart', 'chest_minecart', 'command_block_minecart', 'furnace_minecart', 'hopper_minecart', 'painting', 'spawner_minecart', 'shulker_bullet', 'small_fireball', 'snowball', 'spectral_arrow', 'tnt_minecart', 'tnt', 'egg', 'ender_pearl', 'experience_bottle', 'potion', 'trident'] ;
	

	// __________________________
	// __________ TOOL __________
	// __________________________

	const TOOL_ALL = ['iron_shovel', 'iron_pickaxe', 'iron_axe', 'flint_and_steel', 'wooden_shovel', 'wooden_pickaxe', 'wooden_axe', 'stone_shovel', 'stone_pickaxe', 'stone_axe', 'diamond_shovel', 'diamond_pickaxe', 'diamond_axe', 'golden_shovel', 'golden_pickaxe', 'golden_axe', 'netherite_shovel', 'netherite_pickaxe', 'netherite_axe', 'netherite_hoe', 'wooden_hoe', 'stone_hoe', 'iron_hoe', 'diamond_hoe', 'golden_hoe', 'shears'];
	const TOOL_MAIN = ['iron_shovel', 'iron_pickaxe', 'iron_axe', 'wooden_shovel', 'wooden_pickaxe', 'wooden_axe', 'stone_shovel', 'stone_pickaxe', 'stone_axe', 'diamond_shovel', 'diamond_pickaxe', 'diamond_axe', 'golden_shovel', 'golden_pickaxe', 'golden_axe', 'netherite_shovel', 'netherite_pickaxe', 'netherite_axe', 'netherite_hoe', 'wooden_hoe', 'stone_hoe', 'iron_hoe', 'diamond_hoe', 'golden_hoe'];
	const TOOL_PICKAXE = ['iron_pickaxe', 'wooden_pickaxe', 'stone_pickaxe', 'diamond_pickaxe', 'golden_pickaxe', 'netherite_pickaxe',];
	const TOOL_AXE = ['iron_axe', 'wooden_axe', 'stone_axe', 'diamond_axe', 'golden_axe', 'netherite_axe',];
	const TOOL_SHOVEL = ['iron_shovel', 'wooden_shovel', 'stone_shovel', 'diamond_shovel', 'golden_shovel', 'netherite_shovel',];
	const TOOL_HOE = ['iron_hoe', 'wooden_hoe', 'stone_hoe', 'diamond_hoe', 'golden_hoe', 'netherite_hoe',];





	// __________________________
	// __________ ARMOR _________
	// __________________________

	const ARMOR_ALL = ['turtle_helmet', 'leather_helmet', 'leather_chestplate', 'leather_leggings', 'leather_boots', 'chainmail_helmet', 'chainmail_chestplate', 'chainmail_leggings', 'chainmail_boots', 'iron_helmet', 'iron_chestplate', 'iron_leggings', 'iron_boots', 'diamond_helmet', 'diamond_chestplate', 'diamond_leggings', 'diamond_boots', 'golden_helmet', 'golden_chestplate', 'golden_leggings', 'golden_boots', 'iron_horse_armor', 'golden_horse_armor', 'diamond_horse_armor', 'shield', 'elytra', 'netherite_helmet', 'netherite_chestplate', 'netherite_leggings', 'netherite_boots'];
	const ARMOR_PLAYER = ['turtle_helmet', 'leather_helmet', 'leather_chestplate', 'leather_leggings', 'leather_boots', 'chainmail_helmet', 'chainmail_chestplate', 'chainmail_leggings', 'chainmail_boots', 'iron_helmet', 'iron_chestplate', 'iron_leggings', 'iron_boots', 'diamond_helmet', 'diamond_chestplate', 'diamond_leggings', 'diamond_boots', 'golden_helmet', 'golden_chestplate', 'golden_leggings', 'golden_boots', 'shield', 'elytra', 'netherite_helmet', 'netherite_chestplate', 'netherite_leggings', 'netherite_boots'];



	// __________________________
	// __________ WEAPON ________
	// __________________________

	const WEAPON_ALL = ['bow', 'arrow', 'iron_sword', 'wooden_sword', 'stone_sword', 'diamond_sword', 'golden_sword', 'spectral_arrow', 'tipped_arrow', 'trident', 'crossbow', 'netherite_sword'];
	const WEAPON_MELEE = ['iron_sword', 'wooden_sword', 'stone_sword', 'diamond_sword', 'golden_sword', 'trident', 'netherite_sword'];
	const WEAPON_SWORD = ['iron_sword', 'wooden_sword', 'stone_sword', 'diamond_sword', 'golden_sword', 'netherite_sword'];
	const WEAPON_RANGED = ['bow', 'trident', 'crossbow'];
	const WEAPON_ARROW = ['arrow', 'spectral_arrow', 'tipped_arrow'];


	
	// __________________________
	// __________ FOOD __________
	// __________________________

	const FOOD_ALL = ['apple', 'mushroom_stew', 'bread', 'porkchop', 'cooked_porkchop', 'golden_apple', 'enchanted_golden_apple', 'cod', 'salmon', 'tropical_fish', 'pufferfish', 'cooked_cod', 'cooked_salmon', 'cake', 'cookie', 'melon_slice', 'dried_kelp', 'beef', 'cooked_beef', 'chicken', 'cooked_chicken', 'rotten_flesh', 'carrot', 'potato', 'baked_potato', 'poisonous_potato', 'spider_eye', 'golden_carrot', 'pumpkin_pie', 'rabbit', 'cooked_rabbit', 'rabbit_stew', 'mutton', 'cooked_mutton', 'chorus_fruit', 'beetroot', 'beetroot_soup', 'suspicious_stew', 'sweet_berries', 'honey_bottle'];
	
	const FOOD_VEGAN = ['apple', 'mushroom_stew', 'golden_apple', 'enchanted_golden_apple', 'melon_slice', 'dried_kelp', 'carrot', 'potato', 'baked_potato', 'poisonous_potato', 'golden_carrot', 'chorus_fruit', 'beetroot', 'beetroot_soup', 'suspicious_stew', 'sweet_berries'];

	const FOOD_MEAT = ['porkchop', 'cooked_porkchop', 'cod', 'salmon', 'tropical_fish', 'pufferfish', 'cooked_cod', 'cooked_salmon', 'beef', 'cooked_beef', 'chicken', 'cooked_chicken', 'rotten_flesh', 'rabbit', 'cooked_rabbit', 'rabbit_stew', 'mutton', 'cooked_mutton'];

}