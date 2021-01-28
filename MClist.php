<?php 

namespace Minecraft\Tools;

class MClist 
{

	// __________________________
	// __________ MOB ___________
	// __________________________

	const ENTITY_ALL = ['axolotl', 'bat', 'bee', 'blaze', 'cat', 'cave_spider', 'chicken', 'cod', 'cow', 'creeper', 'dolphin', 'donkey', 'drowned', 'elder_guardian', 'ender_dragon', 'enderman', 'endermite', 'evoker', 'fox', 'ghast', 'giant', 'goat', 'guardian', 'hoglin', 'horse', 'husk', 'illusioner', 'iron_golem', 'llama', 'magma_cube', 'mooshroom', 'mule', 'ocelot', 'panda', 'parrot', 'phantom', 'pig', 'piglin', 'piglin_brute', 'pillager', 'polar_bear', 'pufferfish', 'rabbit', 'ravager', 'salmon', 'sheep', 'shulker', 'silverfish', 'skeleton', 'slime', 'spider', 'squid', 'stray', 'strider', 'trader_llama', 'tropical_fish', 'turtle', 'vex', 'villager', 'vindicator', 'wandering_trader', 'witch', 'wither', 'wolf', 'zoglin', 'zombie', 'zombified_piglin'];
	const ENTITY_HOSTILE = ['blaze', 'cave_spider', 'creeper', 'drowned', 'elder_guardian', 'ender_dragon', 'endermite', 'evoker', 'ghast', 'giant', 'guardian', 'hoglin', 'husk', 'illusioner', 'magma_cube', 'phantom', 'piglin', 'piglin_brute', 'pillager', 'pufferfish', 'ravager', 'shulker', 'silverfish', 'skeleton', 'slime', 'spider', 'stray', 'strider', 'vex', 'villager', 'vindicator', 'witch', 'wither', 'zoglin', 'zombie', 'zombified_piglin'];
	const ENTITY_PASSIVE = ['axolotl', 'bat', 'bee', 'cat', 'chicken', 'cod', 'cow', 'dolphin', 'donkey', 'enderman', 'fox', 'goat', 'horse', 'iron_golem', 'llama', 'mooshroom', 'mule', 'ocelot', 'panda', 'parrot', 'pig', 'polar_bear', 'rabbit', 'salmon', 'sheep', 'squid', 'strider', 'trader_llama', 'tropical_fish', 'turtle', 'villager', 'wandering_trader', 'wolf'];
	const ENTITY_HUMAN = ['pillager', 'villager', 'vindicator', 'wandering_trader'];
	

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