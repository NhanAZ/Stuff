# 1.3.3
- Minecraft: Pocket Edition alpha 0.7.2 compatible!
- Unicode support
- Fixed /difficulty command
- Fixed a few flying kicks
- Fixed async. operations thread
- Added whitelist enabled property to Query

# 1.3.4
**This is a compatibility update for Minecraft: Pocket Edition v0.7.3 alpha.**

Double chests do not work yet, we will fix more bugs and add them when MCPE 0.7.4 is released. There were too many bugs in 0.7.3 to test double chests properly.

#### Including in this release:
- Fixed armor crash
- Fixed ghost armor
- Fixed packets being received after player disconnection
- Fixed player count bug
- Added compatibility with encrypted login
- Fixed flying check on fences
- Fixed players connecting with empty usernames
- Fixed several crashes related to Items
- Added temporal water flowing. Really buggy
- Automatic recovery of index-corrupted maps
- Fixed hotbar reset when changing armor
- Fixed some hotbar reset bugs on block placement
- Added basic tool durability and breaking
- Chests now have opening/closing animation.
- Fixed /difficulty
- In-game player list is now handled correctly
- Player entities are saved in all worlds to remove join/leave spam
- Quartz slabs

# 1.3.5
#### Including in this release:
- Fixed block durability (blocks being replaced)
- Added armor replacing (changing the armor while you have other)
- Added proper Player object cleanups as a fix to a memory leak

# 1.3.7
**This update is compatible with Minecraft: Pocket Edition v0.7.4 alpha.** Older versions won't work.

In Minecraft: PE 0.7.4 you can add External servers directly. [How to add servers](https://github.com/PocketMine/PocketMine-MP/wiki/How-to-add-servers)

![](http://i.imgur.com/ltBJgmUl.png)

### Changelog
- **Updated for 0.7.4 alpha**
- **New API version 10**
  - Adds Tile methods
  - Changes message events to use new Minecraft protocol
  - Added Level::getSafeSpawn()
- Linux now uses PHP 5.5.3
- Removed water updating
- Fixes for Player teleporting
- Removed invalid Cookie and fish items
- Fixed Stone brick and quartz slab recipes
- Shears now are used to drop leaves
- Fixed a crash on Windows XP
- Cake is removed when the bottom block is broken
- Added new NBT parser/writer
- Fixed chests and furnaces drops when broken.
- Fixed signs not spawning on world load
- Fixed actions not being deleted (memory leak)
- Chests now are spawned correctly
- Double chests
- Added random x,z offset to item drops

# 1.3.8
This release consists of a few bugfixes and several features added. It is compatible with MCPE 0.7.4 and 0.7.5

**Changelog:**
- No API changes
- Fixed x,y,z indexes when opening a Furnace
- Fixed invalid fix for CPU usage limiter on idle
- Fixed cross-compiling
- Fixed some Stonecutter recipes
- Fixed a few items stack sizes
- Fixed TimeAPI bugs
- Forces position on teleport, blocks fast teleport mods
- Fixed some blocks havin a send lag on place/break
- Fixed Sign Posts not deleting the Tile data when broken by update
- Fixed Ice converting to Water on creative mode
- Added beds
- Added scheduled teleport on spawn to fix spawning underground
- Added date to console logs

# 1.3.9
This release is compatible with MCPE 0.7.4 and 0.7.5.

**Changelog:**
- Fixed server crash related to beds
- Player movement is less laggy
- Added new text formatting system for future updates
- New Terminal Emulator for Windows
  - More colors! Less warnings!

# 1.3.10
**Changelog:**
- Added door sounds
- Fixed bed sleeping position offset
- Added explosions
- Flint & Steel on Creative Mode (replaces Eggs)
- Changed the Sword and Hoe to the diamond tier on the Creative inventory
- Fixed colors on MacOS
- Water flow
- Fixed Windows console input not being accepted when using special keys
- Added a way to disable console colors
- Updated PHP to 5.5.6, pthreads to 0.0.55, and cURL
- Armor drops
- Fixed plugin issues
- Fixed some block drops
- Fixed a crash when @all is used in console, and only usable for OPs
- Fixed some issues regarding teleporting
- deop no longer op the player again

# 1.3.11
And here it comes the stable release for **MCPE v0.8.1 alpha**. We decided to remove the improved networking that was delaying this release, but you should see it in the next one. Minecarts couldn't be added for the same reason as mobs, but we will try to implement "fake" minecarts that behave correctly inside rails, but not outside of them.

Starting with this release, all PocketMine-MP versions will be given a codename. This one received the codename 「甘いビートルート」_(Amai Beetroot)_.

**Changelog:**
- Fixed existing Packets of Death
- Fixed lots of bugs related to crafting
- Fixed block placement bugs
- Redstone ore drops redstone dust
- Sideway logs
- Sponges
- Added new wooden planks & stairs
- Added iron bars, cobblestone walls and pumpkins
- Added carpets, hay bales and coal blocks
- Added potatoes, carrots and beetroots
- Additional tall grass drops
- Achievements
- Added multiple orders for _/gamemode_ command
- Chat plugins can work with each other #975
- Fixed internal world chunks bug
- Private messages are now hidden on console except when the console is the target/origin
- PHP plugins are now loaded with include()
- Fixed plugin paths
- Added source SHA1 sum to crash reports
- Added Level::startTime() and Level::stopTime()
- Fixed server not being able to start on several OS when offline
- More small fixes and small additions

For more information, check the [complete changelog](https://github.com/PocketMine/PocketMine-MP/compare/Alpha_1.3.10...Alpha_1.3.11).

# 1.3.12
Before starting to rewrite even more parts of the code, we are releasing the last version of the Alpha_1.3.x Amai Beetroot「甘いビートルート」. Next one will be Alpha_1.4 with more rewrite!
We have included the new Event API that will be used on the next release, but now it is only used to hook on packets.

**API Changelog:**
- **Full network rewrite.** Plugins can work with packets easily now.
- **New Event API,** only implemented for packets right now.
- Added player.block.place.bypass and player.block.break.bypass
- Level included in data for event item.drop
- Added Utils::getUniqueID()
- **Added default support in PHP binaries for MySQLi**
- Removed Spyc
- Call Plugin::__destruct() on PluginAPI::__destruct()
- Added more OS detection on Utils::getOS()

**Changelog:**
- New set-up wizard in multiple languages. Help translate it to more languages on http://translate.pocketmine.net/
- Updated pthreads and PHP binaries
- New font for MinTTY console on Windows
- Send partial hotbar history
- Fixed Tile saving indexes
- Fixed a few teleport bugs
- Improved crash dumps
- Increased apple health restore
- Fixed players being invincible after death
- Fixed Level::unloadChunk() not using saveEnabled
- Show player name on bad username kick
- Fixed item duplication on void #1100
- OPs can bypass the player limit
- Fixed item replacing on furnace #1114
- Fixed multiple small bugs #1058 #1032 #854 #823 #1135 #1150 #1172 #1173 #486 #466 #483
- Fixed PHP compilation on 64-bit linux #519 #861 #940 #505 #590 #761 #129
- Included OPCache to optimize opcodes

If you are on Linux, you can use `wget -q -O - http://cdn.pocketmine.net/installer.sh | bash -s - -v Alpha_1.3.12` to update. If you are on a MacOS, use `curl -sL http://cdn.pocketmine.net/installer.sh | bash -s - -v Alpha_1.3.12`

# 1.4dev-228
**For Minecraft: PE v0.9.0 alpha**

Since the latest release, 786 commits have been done, 942 files have been changed (almost every file), and ~200.000 lines have been modified during the last 6 months.

This is the first beta in the 1.4 series. This is a complete rewrite of PocketMine-MP, so only plugins developed for this new API will work.

**Main features:**
- Physics!
- New plugin API!
- Infinite worlds
- Multithreading!
- New efficient threaded networking library, [RakLib](https://github.com/PocketMine/RakLib)
- Supports Minecraft: PE 0.9.0!

**Other features:**
- Permission system
- New event system
- Separation of network code and server logic, allows custom interfaces _(RakLib, BigBrother, RubberBand)_
- Advanced settings on pocketmine.yml file!
- Auto updater notifications
- Support for Anvil worlds (import your PC worlds)

**Not implemented:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- No entities except dropped items (and no spawning)
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-277
**For Minecraft: PE v0.9.1 alpha**

This is the second beta for 1.4, and includes lots of fixes and a few new features since the beta1.

This beta changes the API version to 1.1.0 (backwards-compatible) due to fixes and the new timings feature being added. All plugins that use API 1.0.0 are compatible and do not need changes. If your plugin works on API 1.0.0, please do not set the API version to 1.1.0, that will only refuse to load where it can work.

**Main features:**
- Updated RakLib to 0.2.0
  - Fixes high CPU load issues
  - Fixes players not quitting on timeout
  - Fixes abusive bandwidth usage when a player timeouts
- Fixed abusive CPU and memory usage on normal operation
- Added Timings (read more on #1634)

**Fixes and additions:**
- Updated lava and fire causes #1581
- Fixed #1570 Plugins can't be loaded on folders with periods
- Fixed #1583 Scheduled Tasks getting repeated
- Entity health is now saved and restored
- Fixed #1584 duplicated death messages
- RakLib is now blocking, less CPU usage
- Updated plugin enable/disable event type #1585
- Fixed #1578 Memory leak on chunk garbage collection
- Fixed #1591 Players die when they leave the game
- Fixed /kick player name
- Fixed #1595 Undefined variable on QueryHandler
- Improved entity attack push
- Added more damage sources
- Fixed #1598 spawning on index-corrupted chunks
- Added settings.query-plugins to pocketmine.yml
- Added deprecation warning on plugin events
- Fixed /list now showing the correct player count
- Fixed #1609
- Fixed #1604 Items fly upwards
- Added upload/download speed on title bar
- Fixed unsigned fields read as signed, fixes not being able to use ports bigger than 2^15
- Fixed #1622 /kick crashes the server on offline players
- Fixed #1616 Players now use the world spawn by default
- Fixed #1615 Players on creative mode can die of falling
- Added core timings, plugin timings, and /timings command
- New API version 1.1.0 (backwards-compatible)
- Fixed #1642 Server crashing on invalid entities
- Fixed #1641 Players not having a proper timeout
- Added proper comments to Vector3::add() and Vector3::substract() #1649
- Workaround for clients teleporting randomly
- Workaround for clients crashing in the server
- Workaround for certain AsyncTask not getting collected by the pthreads Pool
- Fixed memory leak in AsyncTask collection
- Improved random block ticking
- Fixed #1640
- Fixed #1636
- Fixed #1590
- Fixed #1573

**Not implemented and known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- CPU usage is high during player join (Anvil -> MCPE network chunk conversion)
- Chunks can be generated empty sometimes, even on spawn chunks
- No entities except dropped items (and no spawning)
- Entity AI
- RCON
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-413
**For Minecraft: PE v0.9.5 alpha**

This is the third beta for 1.4, with a lot of changes since the last beta.

This beta changes the API version to 1.2.0 (backwards-compatible) due to changes in how level formats are handled, Thread management. All plugins that use API 1.0.0 or 1.1.0 are compatible and do not need changes. If your plugin works on API 1.0.0 or 1.1.0, please do not set the API version to 1.2.0, that will only refuse to load where it can work.

**Main features:**
- Crash reports and automatic reporting
- Added multiple Level format support
- Use McRegion format to improve chunk sending CPU usage
- Loaded chunks use 50% less memory than before
- Void chunks have been fixed
- RCON is now working

**Fixes and additions:**
- Added far-generated chunk garbage collection
- Fixed #1628 #1671 invalid sender x,y,z on /spawnpoint
- Use Player::getDisplayName() on more commands
- Fixed crash on /stop
- Fixed being killed on teleport
- Fixed inventory being sent before spawning
- Fixed #1614 #1678 #1711 Some blocks cannot be placed, stone has incorrect ID
- Fixed #1668 Only allow one thread per property
- Implemented new crash dumps
- Added count(Enum), for NBT
- Fixed Level::useBreakOn() when Item was null
- Fixed an error related to AIR constant
- Updated Stick crafting recipe to give x4
- Fix for thrown EmptyChunkSection modification exception
- Fixed player creative inventory
- Fixed crash when placing water or lava
- Fixed crash when cactus was updated
- Fixed crash when using Level scheduled block update ReversePriorityQueue
- Added new exception when a plugin creates an orphaned PluginTask
- Throw exception when an invalid chunk is set as the parent of a Tile/Entity
- Added McRegion detection to Anvil
- Added multiple format support
- Added McRegion level format
- API version bumped to 1.2.0
- Added block order detection, added support for non-sectioned level formats
- Fixed #1659 PvP settings not working
- Fixed loading invalid plugins crashing the server
- Removed SimpleChunk from generator, core, use binary representation of chunks
- Fixed #1807 #1794 #1740 #1741 #1685 Tuned generator to use a better way to process chunks
- Fixed crash on chunks that are used by an entity after generation
- Improved memory usage when chunks are saved/generated
- Added worlds directive to pocketmine.yml to load extra worlds or use a plugin-provided generator
- Disabled chunk ticking while it is being worked on
- Added getExecutor() and setExecutor() method to PluginCommand
- Updated Installer wizard language
- Added proper Entity->__toString()
- Added ChunkLoadEvent, ChunkUnloadEvent, ChunkPopulateEvent
- Fixed /tell command not having spaces
- Added Position::fromObject() strong reference parameter
- Modified how chunks handle level providers
- Added a Thread manager
- Fixed #1842 Players are now moved using the head
- Fixed source servers getting invalid AutoUpdater notifications
- Made AsyncTask::onCompletion() implementation optional
- Fixed RCON usage

**Not implemented and known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- World generation is slower than in older builds
- No entities except dropped items (and no spawning)
- Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-449
**For Minecraft: PE v0.9.5 alpha**

This is the fourth beta for 1.4. From now on, beta builds will be released faster with less changes between them, So we'll focus on adding new features on each build. New features will be buggy, but we hope to receive feedback to fix them soon. Old features will be more stable on each build.

This beta changes the API version to 1.3.0 (backwards-compatible), improving level chunk sending and adding new plugin events for developers. All plugins that target older APIs are compatible and do not need changes. If your plugin works on older API versions, please do not set the API version to 1.2.0, that will only refuse to load where it can work.

**Main features:**
- Improved player movement
- Fixed player actions lagging behind the server
- Implemented circular chunk sending / view distance
- Generation works correctly with multiple worlds
- Creative and survival hotbar works better
- Better wooden tool crafting
- Players will drop their inventory on death

**Fixes and additions:**
- Level formats can send chunks to players directly without implementing an AsyncTask
- Implemented circular chunk sending / view distance, as Johan commented on the IRC
- Fixed AddMobPacket (x,y,z from float to int)
- Generated levels create chunks starting from the spawn, instead of the corner
- Added exception handling to level loading
- Player movement is sent as direct packets, decreases lag
- Fixed #1883 Release strong weak references on close
- Throw exception when null chunk is passed to a Tile/Entity instead of crashing
- Fixed crash caused by a race condition on Query
- Throw invalid event exception when a plugin tries to declare an abstract event
- Stop submission of plugin syntax error crashes
- Fixed crash on tile unloading
- Load later plugins with custom loader, fixes API
- Fixed #1882 Race-condition on multiple world generation, causing lock up
- Alternate chunk generation between multiple levels
- Fixed #1901, EmptyChunkSection gets replaced by invalid Section
- Added SignChangeEvent
- Added RemoteServerCommandEvent
- Bump API version to 1.3.0
- Removed PHP_VERSION constant on pocketmine namespace
- Added Chiseled stone brick, red sand
- Added item activation
- Added Zombie spawn egg
- Added Villager spawn egg
- Fixed AddEntityPacket (type byte -> int)
- Added base Arrow
- Check if player is online before showing it to other players
- Creative and survival hotbar works better
- Workaround crash when placing paintings
- Fixed crashes when default level is not loaded
- Modified chunk generation garbage collector
- Fixed #1674 Wooden tools only craft with Oak wood
- Fixed #1889 Players drop their inventory when they die
- Fixed #1703 In-game action lag
- Fixed level data not being saved
- Improved server shutdown
- Improved player spawning, closes #1890
- Added End Stone, End Portal, Mycelium, Monster Spawner and Podzol blocks.

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- World generation is slower than in older builds
- Server can use more memory than specified
- Chunks are not freed correctly from the generation thread
- Spawning lots of entities causes massive lag
- Entities / Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-478
**For Minecraft: PE v0.9.5 alpha**

This is the fifth beta for 1.4, and we have focused on improving the overall performance of the server.

This beta changes the API version to 1.3.1 (only fixes), so there are no notable changes for plugins.

**Main features:**
- Fixed player movement glitch
- Overall performance improvements
- Server requires PHP 5.5 or greater (drops Windows XP support)
- Reactivated chunk ticking _(can be disabled via pocketmine.yml)_
- Beds! Furnaces!

**Fixes and additions:**
- Fixed potential Mycelium crash. PR #1944
- Fixed #1948 /whitelist list not working
- Deprecated Server::loadPlugin(Plugin) in favor of Server::enablePlugin(Plugin)
- Removed hardcoded Server name from source
- Added --enable-profiler parameter to use with @krakjoe profiler
- Require PHP >= 5.5
- Performance improvements in NBT reading/writing
- Performance improvements in blocks and Entities
- Improved Level::getBlock()
- Improved Air block collision check
- Updated blocks bounding boxes
- Added RakLib port checking option
- Implemented correct time offsets and speed
- Implemented beds
- Fixed #1967 Glowstone dust -> Glowstone recipe
- Added teleport flag to MovePlayerPacket, improves player movement
- Removed unloaded chunk check
- Improved player onGround collision check
- Improved NBT IntArray read/write
- Improved Block selection and construction performance
- Fixed #1970 Breaking blocks does not remove tile entities
- Fixed Chests/Furnaces not dropping contents when broken
- Workaround BaseChunk::setBlock() recursion issues
- Moved spl to [PocketMine-SPL](https://github.com/PocketMine/PocketMine-MP)
- Ctrl+C handling and kill signals are working again
- Fixed #1953 Increased item PickupDelay to 2.5 seconds
- Fixed #1879 Tile entities were not saved on chunk unload
- Fixed #1911 Implemented FurnaceInventory callback
- Added Furnace progress fire
- Fixed undefined index on furnace recipes
- Fixed furnace achievement check
- Improved chunk sending
- Improved chunk ticking, enabled again. _Disable it setting chunk-ticking.per-tick to 0_
- Dropped items and arrows get deleted on Y < 0
- Fixed #1926 Teleport to non-generated chunks

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Server can use more memory than specified
- Idle servers will increase its CPU usage as time goes on
- Chunks are not freed correctly from the generation thread
- Spawning lots of entities causes unexpected lag
- Entities / Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-491
**For Minecraft: PE v0.9.5 alpha**

This is the sixth beta for 1.4, upgrading to PHP 5.6 features and fixing entity physics!

There are no API changes

**Main features:**
- Server requires PHP 5.6, improves performace
- Fixed fatal error on startup
- Fixed entity physics, fixed cause of lag

**Fixes and additions:**
- Fixed #1983 Check player online status
- Fixed #1980 Fatal error on server load
- Initial PHP 5.6 features support
- Improved safe_var_dump(), Inventory::addItem() Inventory::removeItem() using argument unpacking
- Improved performance of Item::get()
- Removed cli_set_process_title() check
- Added entity id names
- Fixed Item after-clone behavior
- Fixed possible Level::getBlock() crash
- Improved unloaded tile entity handling
- Fixed #1966 Face Lit Pumkins correctly
- Fixed entity physics and AxisAlignedBB

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Server can use more memory than specified
- Chunks are not freed correctly from the generation thread
- Entities / Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-576
**For Minecraft: PE v0.9.5 alpha**

This is the seventh beta for 1.4, getting near the stable release.

The API version has been bumped to 1.4.0 (backwards-compatible) due to new features being added and bugs in the API being patched.

**Main features:**
- New pthreads version required, thanks to @krakjoe for fixing lots of bugs!
- Performance improvements in RakLib & thread communication
- Better physics & bounding boxes
- Added working bow & arrows
- Better timings reports
- Improved server ticks per second
- Improved world and block saving
- Added more damage sources

**API changes**
- Implemented NBT::getArray() and NBT::setArray()
- Made EntityDamageByEntityEvent call EntityDamageEvent handlers
- Added EntityShootBowEvent
- Added extra documentation to Level::setBlock()
- Added Server::getTickUsage()
- Fixed PermissionAttachment not recalculating its Permissible permissions
- Fixed EntityMoveEvent not being cancelled correctly on players
- Fixed Permissible::setPermission() not using the correct order on replacement
- Added PermissionAttachment::setPermissions()
- Added PermissionAttachment::unsetPermissions(), PermissionAttachment::clearPermissions()
- Custom threading is less buggy now due to pthreads fixes

**Fixes and additions:**
- Renamed Item\Block to Item\ItemBlock, fixes several crashes
- Fixed physics sneak flag
- Use Entity::move() as player movement, protect against noclip cheat
- Fixed double physics calculation
- Fixed armor crafting recipes
- Added Bed bounding box
- Added Chest bounding box
- Added Carpet bounding box
- Added Slab bounding box
- Added Wooden Slab bounding box
- Fixed entity partial block moving
- Disable RakLib port checking by default
- Added survival check to movements
- Added check for invalid entity attack
- Added arrow and suicide death messages
- Added stairs bounding box
- Added cactus bounding box
- Added End Portal frame bounding box
- Added Farmland bounding box
- Added Fence bounding box
- Added Fence Gate bounding box
- Added Glass Pane bounding box
- Added Iron bars bounding box
- Added Doors bounding boxes
- Added Cake bounding box
- Added Ladder bounding box
- Added Soul Sand bounding box
- Added Cobble Wall bounding box
- Added Trapdoor bounding box
- Fixed infinite Entity recursion on chunk load
- Fixed creative players dropping their inventory
- Player creative check refactor
- Fixed timings name
- Fixed timings ticks getting reset
- Tick entities on Level, show correct timing reports
- Fixed crash when chests are closed with viewers
- Fixed #2032 Do not set Level to null
- Improved CallbackTask timings data
- Added __debugInfo() to Server and Level
- Fixed dropped items going too fast
- Do not report E_PARSE or E_COMPILE_ERROR crashes
- Improved server ticking.
- Fixed Server::getTicksPerSecond()
- Possible fix for level save issues, related to #1985 #1982 #1758
- Implemented Falling Sand
- Fixed possible Player crash on save
- Fixed Level::setBlock() old calls
- Added cactus neighbour block check
- Implemented attack cooldown
- Fixed HeldItem were swapped in mining
- Fixed Player's slot[0] disappears on logging in
- Added --disable-readline CLI argument
- Fixed Item drop delay
- Updated RakLib path
- TPS measurement improvement, moved interface handling to tick
- Possible fix for #2061
- Added binary reading optimizations, faster 64-bit reading
- Normalized Player pitch/yaw
- Added Pumpkin & Lit Pumpkin rotation
- Removed pthreads workarounds
- Fixed #2077 Block changes not being saved
- Fixed #2075 Door bounding boxes
- Added forced position strong check for Player
- Fixed #2035 Invalid Fence Gate bounding box
- Added Player->forceMovement check on teleport
- Enabled default PHP GC on generator thread
- Optimized server sleep times
- Added Permission/Permissible calculation timings
- Level generators can be set in server.properties
- Improved Player last damage check
- Added Fire, Lava damage
- Show fire to other clients
- Cobweb, Ladders and Water won't cause fall damage
- Added suffocation, drowning damage. Closes #1908
- Added more death messages
- Added Cactus damage

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Server can use more memory than specified
- Chunks are not freed correctly from the generation thread
- Entities / Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-599
**For Minecraft: PE v0.9.5 alpha**

This is the eighth beta for 1.4!

There are no important API changes in this build.

**Main features:**
- Faster RakLib processing
- Server won't hang up when stopping
- Fixed usage sending issues
- Decreased memory issues on Generation Thread
- Fixed entity issues on negative coordinates

**API changes**
- Improved event checking on PlayerInteractEvent
- Throw exception when Server::dispatchCommand() is called with an invalid CommandSender
- Documented tool usage in Level::useBreakOn()

**Fixes and additions:**
- RakLib patches
- Handle force parameter properly on Level::unload()
- Remove level locks
- Removed embedded class names
- Fixed #2046
- Fixed date_default_timezone_set E_NOTICE
- Send build number on usage
- Send project name on usage
- Block more player actions when dead, fixes #2102
- Fixed #2104 Can't place blocks where non-solid entities exist
- Fixed Utils::getUniqueID() on Linux due to /proc/cpuinfo
- Protect against \0 attacks on name checking
- Added TPS load to /status
- Possible fix for #1920
- Fixed #2114 Removed Player collisions with other entities
- Fixed Entity/Block issues on negative coordinates, fixes #2100
- Fixed #1750 cannot place slabs against blocks

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Server can use more memory than specified
- Entities / Entity AI
- No liquid flow
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-659
**For Minecraft: PE v0.9.5 alpha**

This is the 9th beta for 1.4!

There are no important API changes in this build, just behavior fixes so the API version has been bumped to 1.4.1

**Main features:**
- Added non-threaded chunk generation, toggleable on pocketmine.yml
- Added Liquid flow
- Fixed Double Chests
- Auto-save property is now working
- Implemented Arrow pick up
- Implement Armor changes as Transactions
- Compatibility with pthreads > 2.0.8
- Entities / Tile Entities are handled more reliable on worlds
- Implemented flying protection

**API changes**
- Deprecated Level->getChunkAt() in favor of Level->getChunk()
- Allow setting the player spawnpoint via events before PlayerJoinEvent
- Fixed PlayerChatEvent::setRecipients() being useless
- Fixed #2153 Cancelling an EntityDamageEvent has no effect for lava damage

**Fixes and additions:**
- Add valid position difference back to Player entities
- Torches can now be crafted using charcoal
- Fixed players getting Suffocation damage inside transparent blocks
- Send player metadata on respawn
- Improved Level::getSafeSpawn()
- Improved knockback motion
- Improved player movement, check once per tick
- Improved chunk unload queue
- Added non-threaded chunk generation, toggleable on pocketmine.yml
- Fixed #2121 Players' heads flip upside down and back around after going past pitch = 0
- Fixed Level->scheduleUpdate() tick calculation
- Improved Level block update scheduling for repeated updates
- Added torch drop
- Basic entity motion on water
- Improved Player generation queue
- Fixed #2126 Items drop twice from tile entities
- Fixed Double Chests
- Fixed server crash when Tile Entities / Entities were loaded and requested the same chunk
- Fixed auto-save configuration, made it global
- RakLib update
- Fixed #2055 Extra packet data sent on armor change
- Improved single-threaded chunk generation efficiency
- Improved entity base ticks
- Improved entity movement updates
- Implemented Arrow pick up
- Fixed Anvil levels duplicating saved entities
- Improved Chunk entity loading
- Improved exponentiation
- Added armor change $source parameter
- Improved PlayerInventory->setItemInHand() $source call, fixed Tool durability
- Implement Armor changes as Transactions
- Fixed entities getting OnGround default to true
- Added individual object timings to Entities / Tile Entities
- Compatibility with pthreads > 2.0.8
- Reliable timezone detection
- Fixed Server->unloadLevel() not removing objects from memory
- Moved connected flag up in the Player disconnect process
- Improved initial chunk loading, do not skip near chunks, fixes world loading getting stuck
- Changed base block classes to abstract, closes #2159
- Implement crop growth levels properly, fixes #2002, closes #2160
- Implemented flying protection
- Fixed Player movement collision checks
- Removed parse errors from AutoReporting
- Improved entity ticking
- Fixed Level->getCollidingEntities() when called with a null Entity
- Removed selectors on Player->sendMessage()

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-665
**For Minecraft: PE v0.9.5 alpha**

There are new additions to the API (backwards-compatible), and the API version has been bumped to 1.5.0

**Main features:**
- Fixed issues with latest beta
- Explosions!
- Added Vines
- Plugins can now change Query data

**API changes**
- Added new Tool type selection constants
- Implemented QueryRegenerateEvent
- API 1.5.0

**Fixes and additions:**
- Do not spawn dead entities to players, fixes #2157, possible fix for #2139
- Unload entities from chunks, possible fix for #2157, fixes #2165
- Added Vine blocks, closes #2162
- Spawnable->spawnToAll() now uses the actual chunk instead of the entire level to spawn
- Implemented Explosion and PrimedTNT, closes #2139

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-707
**For Minecraft: PE v0.9.5 alpha**

This release includes lots of backwards-compatible API changes, so the API version has been bumped to 1.6.0

**Main features:**
- Overall performance improvement
- Lots of new events for the plugin API
- Level Block caching, improves performance
- Removed dead code and ported old functionality on item drops
- Implemented scheduled and partial entity updates, improves performance
- Only modified chunks are saved

**API changes**
- API 1.6.0
- New PlayerMoveEvent, improved player movement event firing
- **Deprecated EntityMoveEvent**
- Fixed arrow damage not getting overridden by the event result
- Added EntityCombustEvent and children
- Added EntityDamageByBlockEvent (child of EntityDamageEvent)
- Improved EntityRegainHealthEvent
- Improved EntityShootBowEvent
- Added ExplosionPrimeEvent
- Added ItemDespawnEvent
- Added ItemSpawnEvent
- Added ProjectileLaunchEvent
- Added ProjectileHitEvent
- Added PlayerBedEnterEvent and PlayerBedLeaveEvent
- Added PlayerDeathEvent methods for inventory keeping
- Added Tile->getBlock() method
- Added FurnaceBurnEvent
- Added FurnaceSmeltEvent
- Added Living->getTargetBlock(), Living->getLineOfSight(), Vector3 side constants, Vector3::getOppositeSide()
- Deprecated Level->getSpawn() in favor of Level->getSpawnLocation()
- Added LeavesDecayEvent
- Added BlockSpreadEvent
- Added BlockGrowEvent
- Added EntityBlockChangeEvent
- Added PlayerBucketEvent and children, improved Bucket usage and Liquid placing
- Removed Generic block class
- Updated PluginManager event deprecation message
- Added BlockUpdateEvent
- Throw CRITICAL error message on unhandled Exception on plugin events instead of crashing
- Throw CRITICAL error message on unhandled Exception on commands instead of crashing
- Fixed Inventory->removeItem()
- Fixed AxisAlignedBB->setBB()

**Fixes and additions:**
- Updated RakLib, better player join
- Fixed issues with Entity::heal() method
- Removed unused imports
- Updated fuel duration to ticks
- Improved liquid performance
- Removed old OS detection code
- Added TextWrapper
- Increased Player->stepHeight to 0.6, closes #2156
- Removed workaround on flying check due to physics calculation fix, closes #2169
- Workaround for entities glitching through the floor on the client-side
- Improved Living entity ticking
- Removed unused code, fixed undefined variables
- Added global block cache
- Made Wheat crops extend Crop class
- Removed old Player->timeout property
- Fixed Level->getCollidingEntities()
- Save block bounding boxes, improves block cache
- Removed a bunch of TODO and fixed item drops on block update
- Improved item drop spawning
- Improved Entity extinguish operations and packet spam
- Increased Player->forceMovement check radius
- Improved player movement event firing & corrections
- Fixed Level->getNearbyEntities(), fixes item drops not being picked up
- RakLib update, PING/PONG handling
- Implemented scheduled and partial entity updates
- Micro-optimizations
- Fixed player using an invalid spawn chunk
- Implemented saving modified chunks
- Fixes entities not being saved and tile entities having an incorrect field, closes #1661
- Match Player pickup area with Minecraft
- Fixed RegionLoader not creating default index on first load
- Do not block when killing workers
- Fixed error_handler trace generation on higher debug levels
- Do not wrap text if unknown characters are found.
- Fixed Tasks deleting their Timings reports
- Added extra Entity metadata
- Optimized Player->orderChunks() and chunk sending ordering algorithm
- Improved chunk loading and order refresh times
- Fixed #2183
- Improved broadcast packet encoding

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-822
**For Minecraft: PE v0.9.5 alpha**

This should be the last beta version for Minecraft: PE v0.9.5, the next release will be for Minecraft: PE 0.10. It is already ready, so we aim to release it on the same day as it is released for iOS and Android.
This release includes lots of backwards-compatible API changes, so the API version has been bumped to 1.7.0

**Main features:**
- Overall performance improvements
- Fixes lots of problems related to inventory
- Snowballs!
- Added Error -> Exception handling
- Fixed lots of crafting recipes
- Builds are now optimized on creation time
- Added /time start and /time stop
- Improved networking code and binary I/O methods

**API changes**
- API 1.7.0
- Fixed Level->getMetadata() and similar, removed extra references
- Fixes get and set armor
- Fixed Inventory->removeItem()
- New way to spawn entities/tiles using a global register table, allow overriding default entity/tile classes via classes
- Added Error -> Exception handling
- Added extra Exceptions
- Fixed InventoryPickupItemEvent
- EntityDamageEvent and children now only fire if the attack is possible, moved event trigger to Entity->attack()
- Added InventoryPickupArrowEvent
- Fixed Event name being null
- Fixed some inventory events not firing on players
- Fire PlayerInteractEvent on 0xff face
- Added EntityDamageByChildEntityEvent
- Allow passing a Player source as last parameter on Inventory->addItem() and Inventory->removeItem()
- Return proper BlockIterator index, throw more exceptions, improved blockQueue performance
- Use proper indexes on Living->getLineOfSight() when a max length is set

**Fixes and additions:**
- Fixed inventory changes getting the wrong window, closes #2187
- Improved Level object deallocation
- Improved inventory and window allocation, fixes #2200
- Fixed entities not being pushed out of blocks
- Improved Player->onGround checking
- Improved Explosion item drop position
- Added explosion death message
- Fixed crash when doing var_dump() of anything that contains the Server object
- Removed extra ; from if, fixes #2205
- Possible fix for entities not closing correctly
- Fixed #2207 Server crashing if players are closed before logging in
- Fixed red sand not falling correctly
- Drop invalid entities / tile entities on chunk loading
- Fixed entities not getting ticks on movement
- Fixed /setworldspawn changing sender data
- Mark chunk to be saved when removing invalid entities/tiles
- Updated RakLib
- Improved network packets allocation
- Improve #2238, do not crash when an invalid/corrupt RCON stop event happens
- Disallow further modification of Signs by its creator after load/unload
- Added Snowballs
- Fixed UseItemPacket being able to be sent before spawning
- Fixed plugins crashing the server when teleporting players on an invalid event
- Use Player->forceMovement on MovePlayerPacket non-tick revert
- Added Entity->onGround setting when entities keep moving without checks
- Remove chunks from advanced cache after setting
- Fixed Trapdoor recipe
- Fixed Bowl recipe
- Fixed Stonecutter recipe
- Fixed Double Chest behavior
- Fixed Chest->unpair()
- Blocks now save their bounding box, fixed entity block collision check
- Added extra chunk sending timings
- Added preprocessor optimizations
- Fixed players not loading chunks when stuck on a unloaded chunk
- Optimized networking code & AxisAlignedBB
- Improved freeing chunks
- Fixed #2204
- Added packet exception handling
- Fixed crashing server not stopping
- Fixed Entity being set position after being closed
- Fixed Query-related crash
- Despawn entities correctly from clients as they move
- Improved level switching for players
- Added /time start and /time stop
- Fixed server not using the correct provided path if it did not exist
- Fixed random block updates not firing
- Updated timings command, give direct link to results
- Use SplFixedArray for improved performance
- Fixed player viewer list including themselves
- Improved inventory sending, send single slots instead of full inventory as much as possible
- Fixed unloading chunks
- Automatically set Entity / Tile entity save identifiers
- Added vertical and horizontal collision detection to Entities
- Fixed bonemeal recipe, closes #2260
- Fixed Snow block recipe
- Fixed String -> Wool recipe
- Fixed ladder recipe
- Fixed red sand smelting recipe
- Improved Level->getTile() to a direct lookup instead of linear search
- Reenabled collision against entities on move

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-834
**For Minecraft: PE v0.10.0 alpha**

**Main features:**
- Minecraft: PE v0.10 support!
- Fixed some crafting recipes
- Fixed some memory leaks
- Fixed issues with tile entities

**API changes**
- API 1.7.1
- Fixed PlayerInventory->setItem() with null items
- Fixed Level->getTile()

**Fixes and additions:**
- Bumped protocol version to 20
- Added different Fences, new Fence crafting recipes
- Added different Fence Gates, new Fence Gate crafting recipes
- Added new fences and fence gates to fuel types
- Updated UseItemPacket
- Updated time steps from x2.5 to x1.25
- Fixed Chunk tile indexes
- Get timezone directly. Fixes #2287.
- Bumped weakref version, fixes travis builds
- Fixed Acacia / Dark Oak logs crafting recipes
- Fixed version message color
- Fixed tile entities not being placed in the correct array
- Fixed permission-related memory leak
- Improved and fixed command exception message, closes #2301
- Fixed #1969
- Possible fix for #2297

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-842
**For Minecraft: PE v0.10.4 alpha**

**Main features:**
- Improved chunk loading
- Catch more exceptions and give extra debug messages
- Recreates / fixes corrupt chunks with a huge amount of tile entities

**API changes**
- Improved exception handling and debugging

**Fixes and additions:**
- Improved chunk loading/unloading
- Protect permission removal against bad plugins
- Remove duplicated tiles from chunk table automatically
- Regenerate corrupt player data if invalid data is found
- Catch corrupted chunk data errors
- Increased Fence, Fence Gate and Stone Wall Y bounding box
- Bumped Minecraft: PE version string
- Removed old trigger_error() calls, closes #2335
- Properly close inventory windows from Players
- Catch exceptions when chunks are unloaded
- Possible fix for #2267, #2314
- Improved player spawn item in hand sending
- Improved global entity motion encoding using per-player queues

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Issues with spawnpoint
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-847
**For Minecraft: PE v0.10.4 alpha**

**Main features:**
- Fixed a crash introduced on the last beta
- Improved inventory handling

**API changes**
- Fixed Inventory->addItem()
- Removed unused Block->isLiquid property

**Fixes and additions:**
- Fixed #2340
- Improved Inventory->addItem(), fixed breaking containers duplicating the last slot, removed not necessary slot changes
- Fixed ladder crafting recipe

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-855
**For Minecraft: PE v0.10.4 alpha**

This version has API changes, some additions and fixes, bumping the version to 1.8.0. These changes are detailed below.

**Main features:**
- Fixed some duplication issues
- Added light spreading
- Less glitched PlayerMoveEvent handling by plugins

**API changes**
- API 1.8.0
- Added Level->getFullLight()
- Updated player movement processing and event handling

**Fixes and additions:**
- Fixed armor dropping twice
- Fixed invalid worlds property being set by users
- Removed temporal pthreads workaround
- Implemented light population
- Removed old revert flag from Player->processMovement()
- Enabled batch block sending again

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No support for LevelDB worlds (0.9.0 format)
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-900
**For Minecraft: PE v0.10.4 alpha**

This version has API changes, some additions and fixes, bumping the version to 1.9.0. These changes are detailed below.

**Main features:**
- Global optimizations
- New block/item creation and handling system
- Multiple non-ordered hotbar slots
- Added death animations
- Updated RakLib: proper recovery queues and packet reordering
- Experimental LevelDB worlds support

**API changes**
- API 1.9.0
- Added internal use warning for TaskHandler::cancel()
- Implemented no damage ticks
- Added Config->getNested(key) and Config->setNested(key, value)
- Added HeightMap get/set methods on chunks, Level
- Do not quiet error messages when parsing config files
- Added Level->getFullBlock()
- Added FullChunk->getFullBlock()
- Added Chunk->getFullBlock()
- Added ChunkSection->getFullBlock()
- Deprecated FullChunk->getBlock()
- Deprecated Chunk->getBlock()
- Deprecated ChunkSection->getBlock()
- Added trait autoloading
- Fixed #2392
- Fixed #2394
- Allow $base in knockback() to be dynamic and getters/setters in EntityDamageByEntityEvent
- Update documentation of PluginBase::getCommand() for IDEs' auto completion
- Added default parameter to Config getters, implements #2398
- Added optional parameter for multiple NBT read

**Fixes and additions:**
- Change last X/Y/Z/Yaw/Pitch on teleport
- Added armor items and max stack size for them.
- Force player setting their new position
- Block creating and property handling rewrite
- Fix CPU issue when starting without STDIN
- Use squared distance on movement handling
- Renamed old getID() calls to getId()
- Improved Item property handling
- Handle a hotbar queue to allow using more than the first slot (won't save order due to the protocol)
- Collect unallocated chunks from the Level provider
- Faster Level provider chunk unloading
- Improved block reading
- Created global block states array
- Improved Level->getBlock() using block states
- Improved Level->getBlock() for 64-bit systems
- Better block creation on Level
- Added Player death animations, improved spawning behavior to correct invisible players, fixed players getting stuck when dead, closes #2304
- Replaced some instanceof to null checks
- Fixed players not getting sound when they are harmed
- Level optimization, added new chunk/block hashes
- Optimized Liquid spreading, optimized light updates, improved side block get/update, fixed raw set not cleaning Block cache (TNT explosions)
- Updated RakLib: Implemented packet reordering, fixed packet recovery in both sides, errors are now debug level, workarounds possible CPU-hog DoS attack over ACK/NACK packets
- Changed some Entity move AABB calls
- Snow layer recipe added: Fix for #2400
- Added World Generation timings
- Added experimental LevelDB support, fixed a few issues with NBT, spawning and Binary R/W
- Fixed #2423
- Added Double Plant block, fixes damage walking inside it.
- Added Chest recreation on imported levels
- Fixed possible memory leak when hiding players from each other
- Fixed server.log created in two different places on path changed
- Increased transaction timeout, not needed anymore due to packet ordering
- Improved block breaking time and event handling

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4dev-916
**For Minecraft: PE v0.10.4 alpha**

This version has API changes, bumping the version to 1.10.0. These changes are detailed below.

**Main features:**
- New version format (drops the stage part)
- Added automatic/manual IP blocking
- Increased chunk defaults
- Improved speed of several generation steps
- Fixed some memory leaks on 32-bit hosts
- Improved exception handling and trace creation

**API changes**
- API 1.10.0
- Changed RakLib network interface implementation

**Fixes and additions:**
- Bitmask block state
- New version format
- Possible workaround for some PHP bug related to resources and threads
- Players won't take damage 60 ticks after spawning / respawning.
- Fixed #2446
- Added automatic/manual RakLib IP address, block addresses when exceptions are thrown
- Move Query exceptions to debug level > 1
- Block IP addresses on ban-ip
- Added typehints to HelpCommand
- Corrected fence crafting recipes, closes #2457
- Improved Normal generator speed
- Fixed memory leak issues on chunk generation under 32-bit hosts. Closes #2419, fixes #2308
- Fixed issue with generated chunks not having a provider. Closes #2421
- Higher chunk defaults
- Improved Simplex 2D noise
- Added chunk check on Level
- Detect really big corrupted chunks, closes #2471
- Improved exception handling and trace creation
- Fixed players not calculating onGround correctly

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4.0
**For Minecraft: PE v0.10.4 alpha**

This is the first stable build of PocketMine-MP 1.4. Lots of changes have happened since 1.3.12, and they won't be detailed here. You can find them on the release list here on GitHub.

Old worlds won't be converted automatically, and you can find it lacking some features. These will be implemented in a future update, as the release was pushed ahead due to the old "stable" release being completely outdated and no features being offered by it.

This version has API changes, bumping the version to 1.10.0. These changes are detailed below.

**Main features:**
- New version format (drops the stage part)
- Added automatic/manual IP blocking
- Increased chunk defaults
- Improved speed of several generation steps
- Fixed some memory leaks on 32-bit hosts
- Improved exception handling and trace creation

**API changes**
- API 1.10.0
- Changed RakLib network interface implementation

**Fixes and additions:**
- Bitmask block state
- New version format
- Possible workaround for some PHP bug related to resources and threads
- Players won't take damage 60 ticks after spawning / respawning.
- Fixed #2446
- Added automatic/manual RakLib IP address, block addresses when exceptions are thrown
- Move Query exceptions to debug level > 1
- Block IP addresses on ban-ip
- Added typehints to HelpCommand
- Corrected fence crafting recipes, closes #2457
- Improved Normal generator speed
- Fixed memory leak issues on chunk generation under 32-bit hosts. Closes #2419, fixes #2308
- Fixed issue with generated chunks not having a provider. Closes #2421
- Higher chunk defaults
- Improved Simplex 2D noise
- Added chunk check on Level
- Detect really big corrupted chunks, closes #2471
- Improved exception handling and trace creation
- Fixed players not calculating onGround correctly

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4.1dev-936
**For Minecraft: PE v0.10.4 alpha**

This version has API changes, bumping the version to 1.11.0, and it won't be bumped again until a stable build is released. These changes are detailed below.

**Main features:**
- Improved chunk saving and reduced world corruption
- Fixed some strange crashes on broken systems
- Improved movement and block placing
- Automatic resource freeing on Region-based worlds

**API changes**
- API 1.11.0
- Added PlayerCreationEvent
- Added Level->getChunks(), fixed some Doc Comments
- Added Async Task crash warning
- Fixed issue where plugins schedule a Player update before log in

**Fixes and additions:**
- Improved threading and resource usage, new defaults
- Removed all @mkdir() calls
- Catch exceptions on level generation
- Fixed some crashes related to crashing
- Fixed messages and default settings
- Fixed #2488 Player suffocates when putting blocks to climb higher
- Fixed #2489 Falling Sand drops as an item when not expected
- Cleaned up BanEntry creation
- Fixed phar check
- Fixed visual typo in /ban-ip, closes #2503
- Improved chunk saving times by not marking it as changed when Players are added/removed
- Fixed #2511
- Catch more corruption issues in Region-based worlds, fixed first chunk being generated on an invalid sector
- Fixed Entities being placed in recreated chunks
- Fixed Flat generator on existing chunks, region issues
- Unload unused regions after 5 minutes
- Improved file resource usage
- Added GarbageCollectionTask, workaround for weird PHP behaviour when using --disable-ansi

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.4.1
**For Minecraft: PE v0.10.5 alpha**

This version has API changes, bumping the version to 1.11.0, and it won't be bumped again until a stable build is released. These changes are detailed below.

**Main features:**
- Improved chunk saving and reduced world corruption
- Fixed some strange crashes on broken systems
- Improved movement and block placing
- Automatic resource freeing on Region-based worlds
- Ignore spawn protection when no ops are set
- Improved flight cheat protection
- Fixed chunk corruptions

**API changes**
- API 1.11.0
- Added PlayerCreationEvent
- Added Level->getChunks(), fixed some Doc Comments
- Added Async Task crash warning
- Fixed issue where plugins schedule a Player update before log in
- Added new predictive flight protection
- Added Location::__toString()
- Added Entity->resetFallDistance()
- Fixed #2619 BlockMetadataStore
- Added Entity->fastMove() for players and direct-controlled entities
- Implemented Threaded ClassLoader, improves class loading while on different threads (no need to synchronize states)
- Allow plugins to cancel some kicks better, closes #2743

**Fixes and additions:**
- Improved threading and resource usage, new defaults
- Removed all @mkdir() calls
- Implemented proportional armor modifier, applied armor in other damage types and consume armor when player is damaged
- Implemented hardcore banning, closes #2574
- Implemented double chest fix, closes #2744, fixes #2493
- Catch exceptions on level generation
- Changed generator choosing logic, add proper preset if needed, fixes #2751
- Fixed some crashes related to crashing
- Fixed messages and default settings
- Fixed #2488 Player suffocates when putting blocks to climb higher
- Fixed #2489 Falling Sand drops as an item when not expected
- Cleaned up BanEntry creation
- Fixed phar check
- Fixed visual typo in /ban-ip, closes #2503
- Improved chunk saving times by not marking it as changed when Players are added/removed
- Fixed #2511
- Catch more corruption issues in Region-based worlds, fixed first chunk being generated on an invalid sector
- Fixed Entities being placed in recreated chunks
- Fixed Flat generator on existing chunks, region issues
- Unload unused regions after 5 minutes
- Improved file resource usage
- Added GarbageCollectionTask, workaround for weird PHP behaviour when using --disable-ansi
- Fixed /timings off
- Fixed fences not showing up
- Improved chunk ticking
- Block saving chunks too big
- Changed max speed per tick from 100 to 10 blocks
- Added outdated event static properties
- Allow placing Snow Layers on top of solid transparent blocks
- Fixed PHPRC env. variable being set
- Throw exception when RakLib crashes
- Added rotation transformations to remaining packet
- Fixed #2557
- Fixed #2541 server not saving chunks on chunk unloading
- Return on Level->getSafeSpawn() in case of invalid position
- Fixed #2565
- Falling sand will become block when in contact with a Liquid
- Fixed Iron bar, Stonecutter drops
- TallGrass blocks should be only placed on grass blocks
- Fixed #2615
- Fixed players getting kicked for flying when going through special blocks
- Future workaround for #2626
- Catch file saving exceptions
- Added basic speed protection
- Fixed Dark Oak Fence's name
- Fixed #2762
- Fixed Anvil lighting issues
- Fix some Chunk corruption due to Chunk overlap
- Fixed constructors, default memory to -1, default async generator
- Fixed NBT IntArray off-by-one reading
- Fixed falling sand breaking on full BB partial blocks, closes #2770

**Not implemented or known issues:**
Please do not report lacking features to the bug tracker, only report bugs on implemented features.
- Entities / Entity AI
- No conversion for old levels (will be added later)
- No Minecarts
- Not all items are implemented
- Generated worlds use a basic generator

# 1.6.1dev-87
**For Minecraft PE 0.16.0.5 alpha**

**THIS IS A PRE RELEASE. Do not use it in production unless you are sure you know what you are doing.**

Only changes since the 1.6dev tag will be documented here. Changes between 1.4.1 and 1.6dev are far too extensive to document effectively.

## Core
- New RNG, based on XorShift128 from the php-random library. This fixes issue with repeating terrain on 32-bit systems. _Note however that new generation into existing worlds will not be seamless._
- Block and Item IDs have been moved to interfaces for better consistency
- Better method for synchronisation of client/server time (less packet spam)
- Utils::getRandomBytes() has been deprecated in favour of php7's random_bytes() function.
- `<player>.dat` saving/reading can now be disabled in `pocketmine.yml` (set `player.save-player-data` to `false`)

## Gameplay/game features
- Added Flower Pots
- Containers can now be opened in creative
- Trapdoors can now be placed without a supporting block

## API

This release has API changes, bumping the version to 2.1.0.

### Entity metadata (0.16)

Many changes have been made to entity metadata. Many true/false data properties are now entity status flags, such as NoAI, NametagVisible and various others. Entity status flags can be set using:
`$entity->setDataFlag(Entity::DATA_FLAGS, Entity::INSERT_DATA_FLAG_NAME, true/false);`

**Breaking** changes are detailed here. Additions are not documented. https://gist.github.com/dktapps/76b291b7a861762b54f7a8b834389883

**NOTE: It's strongly recommended to use provided API methods where possible instead of tampering with metadata directly.**

### AsyncTask API additions
- Main thread local storage: Developers can pass any data including objects to the constructor of AsyncTask such that the data can be retrieved after the AsyncTask completes using the new `AsyncTask::fetchLocal()` method, or use the `AsyncTask::peekLocal()` method to get the data without removing it.
- Progress updates: Developers can use the new `AsyncTask::publishProgress() method and override`AsyncTask::onProgressUpdated()` to handle AsyncTask progress information in the main thread.

Refer to #1 and #100 for details.

### WeakPosition

WeakPosition was added in 1.6.1 to fix bugs with unloading levels which have player spawn points set in them. This type of position holds a level ID instead of a direct reference. Use this when your position may outlive the level it is in.

### Removal of Item/NBT circular dependency

Refer to #121 for details.

### Other
- Added Player->sendWhisper() (#73).
- Removed LargeExplodeParticle due to incorrect name - use HugeExplodeParticle. Added HugeExplodeSeedParticle and BlockForceFieldParticle (7314aaf7f7bdae582f674c085c7ae879985bf847)

## Fixes
- Fixed the infamous hotbar spaz bug
- Creative/spectator inventory now sends correctly
- Fixed spectator flight controls
- Fixed issues with items going past the end of the regular inventory
- Fixed furnace client crashes
- Fixed inventory windows for anvils and enchanting tables
- Fixed kicked for walking on lily pads (#blameshoghicp)
- Fixed a nasty entity-related memory leak on chunk unload
- Fixed sleeping players floating above beds and teleportation of sleeping players.
- Fixed a bug in Level::updateAround() where only one block would update
- Fixed some slab placement issues (#31)
- Fixed crash loading 1.11 worlds (#32)
- Fixed broken `--disable-readline` command-line option (#34)
- Fixed world unload crash when players have spawnpoints set in that world (#24)
- Fixed start.sh detection of system PHP binaries (#66)
- Fixed anvil rotation when placed and variant drops (d696049a0ad5e3b878a8f902e4ef75f19ec8cecc)
- /timings command is now more verbose about paste errors (#95)
- Fixed server crash at shutdown when RCON is enabled (#101)
- Fixed server name is always "Minecraft: PE Server" when running setup wizard (92bd1a755d4b171b687538db83893b9bd9c70420)
- Fixed CraftItemEvent->getInput() does not return used items (7eb9530346e953d1555623ff871086f85447b6c6)
- Fixed useless ServerKiller (#122)

**For Minecraft: Bedrock Edition 1.4.0**

Plugin scheduler rewrite, RCON rewrite, performance improvements, improved idle memory usage

**While this release is nominally not an alpha, it is still not feature complete and does not include all gameplay features. Please do not create issues for missing gameplay features.**

This build has breaking API changes.
This release is the first to use the new merged versioning system. The PocketMine-MP version and the API version are now one and the same.

Please use our issue tracker to report bugs.

# 3.0.0
## Core
### General
- This release introduces a new dependency library called `Snooze`, which PocketMine-MP utilizes for managing notifications between threads. This library is currently utilized by command reading, RCON and RakLib, allowing faster response times to commands, reduced network latency, and better performance due to lack of need for polling.
- Fixed race condition causing `ServerKiller` to sometimes kill the server for no reason on shutdown.

### Dependency libraries
Requires the following libraries:
- [`pocketmine/raklib` `^0.12.0`](https://github.com/pmmp/RakLib/releases/0.12.0)
- [`pocketmine/spl` `^0.3.0`](https://github.com/pmmp/SPL/releases/0.3.0)
- [`pocketmine/binaryutils` `^0.1.0`](https://github.com/pmmp/BinaryUtils/releases/0.1.0)
- [`pocketmine/nbt` `^0.2.0`](https://github.com/pmmp/NBT/releases/0.2.0)
- [`pocketmine/math` `^0.2.0`](https://github.com/pmmp/Math/releases/0.2.0)
- [`pocketmine/snooze` `^0.1.0`](https://github.com/pmmp/Snooze/releases/0.1.0)

These libraries may individually have changes which are not recorded here. See their independent repository releases for their changelogs.

### Async pooling
- Async workers are now started dynamically when they are needed only, instead of being started immediately on startup. This allows reducing idle memory usage.
- AsyncPool now appropriately shuts down the workers when instructed to, instead of leaving it up to the ThreadManager to clean it up. This eliminates debug messages of shutting down async workers on server shutdown.
- Default maximum async worker memory limit has been lowered from 1024MB to 256MB.
- Async workers are now started using the options `PTHREADS_INHERIT_CONSTANTS | PTHREADS_INHERIT_INI`, which reduces idle memory wastage and works around some bugs in pthreads.

### Entities
- Fixed entities not being despawned when flagged, if they weren't scheduled for an update.

### Levels
- Seed handling is now always consistent between `pocketmine.yml` and `server.properties`.
- Fixed generation bugs in imported LevelDB worlds where the classpath was saved into level.dat.
- Generators for levels are no longer created on the main thread, reducing memory usage.

### Plugins
- Plugin data is now stored under `<data dir>/plugin_data` by default on new installations, instead of in `<plugins dir>`. This behaviour does not affect existing installations by default - if you want to enable it, set `plugins.legacy-data-dir` to `false` in `pocketmine.yml`.

### RCON
RCON has been almost completely rewritten in this release.
- Now event-driven (using Snooze) instead of poll-based, improving performance.
- Fixed segmentation fault when stopping the server with RCON enabled.

## API
**WARNING: Dependency library API changes are not listed here. See their individual release notes for changes (linked above in the Core section).**

### API versioning changes for plugins
The way that the API versioning is done has changed. Now the API version is synonymous with the PocketMine-MP version.
Plugin compatibility is determined by the following:
- Take the base version, and strip any metadata (everything after the `+` sign, for example `3.0.0+dev.1191` becomes `3.0.0`).
- Assert that:
  - The major versions is the same
  - The server's minor version is greater than or equal to the plugin's
  - The server's patch version is greater than or equal to the plugin's

Currently there is no support for locking version by metadata, although this could be implemented if it is a wanted feature.

### General
- `Server->getCodename()` and `\pocketmine\CODENAME` have been removed.
- Added API method `Server->getTickSleeper()`, which returns a `\pocketmine\snooze\SleeperHandler` instance.
- `Server->getIp()` now returns `0.0.0.0` if not set.

### Block
- Added `Block->getXpDropForTool()`.

### Entity
- Calling `scheduleUpdate()` on an `Entity` after it has been `close()`d will now cause an exception to be thrown.
- `Entity->motionX`, `Entity->motionY` `Entity->motionZ` have been removed in favour of an `Entity->motion` `Vector3` field. This also applies for the `lastMotion` fields.
- `Entity->isInsideOfWater()` has been renamed to `isUnderwater()`.

### Events
- Added support for `@softDepend` annotation on event handlers, which allows the event handler to not be registered if the dependency plugin is not loaded.
- Added support for `@notHandler` annotation for `Listener` methods to indicate that such methods are not event handlers.
- Typehints have been applied to the events API to PHP 7.2 standards.
- Fixed preventing effect expiry using `EntityEffectRemoveEvent` not being reflected on the client.
- `EntityDamageEvent` API has significant changes. The general purpose of this is to split up base damage from modifiers.
  - Added methods `getBaseDamage()`, `setBaseDamage()`, `getOriginalBaseDamage()`, `getModifiers()`, `getOriginalModifiers()`
  - `setDamage()` renamed to `setModifier()`, and type parameter is now mandatory
  - `getDamage()` renamed to `getModifier()`, and type parameter is now mandatory
  - `getOriginalDamage()` renamed to `getOriginalModifier()`, and type parameter is now mandatory
  - Removed `MODIFIER_BASE` constant
  - Constructors now accept: `float baseDamage`, `float[] modifiers` instead of just `float[] modifiers`
- Added `BlockBreakEvent->getXpDropAmount()` and `BlockBreakEvent->setXpDropAmount()`.

### Inventory
- `InventoryTransaction->getCreationTime()` has been removed.
- `EntityInventoryChangeEvent` and `EntityArmorChangeEvent` are no longer fired during entity inventory intialization.

### Item
- Methods `isPickaxe()`, `isAxe()`, `isSword()`, `isShovel()`, `isHoe()`, `isShears()` have been removed. These should be replaced with `instanceof` checks for the relevant classes.
- Removed `Item->useOn()`. This has been superseded by new methods used for handling durability changes.
- Added hooks `Item->onDestroyBlock()` and `Item->onAttackEntity()`. These are called when a player uses the item to destroy a block or attack an entity respectively. This is used in the core code for updating durability.
- `Item->pop()` now accepts an optional count parameter.
- `Enchantment` now has separated primary items (which can be enchanted directly) and secondary items (which can be enchanted on an anvil). The constructor of `Enchantment` has been updated to reflect this.
  - Removed `Enchantment->getSlot()` and `Enchantment->hasSlot()`.
  - Added `Enchantment->getPrimaryItemFlags()`, `Enchantment->hasPrimaryItemFlag()`, `Enchantment->getSecondaryItemFlags()` and `Enchantment->hasSecondaryItemFlag()`

### Level
- `Biome` classes have been moved to `pocketmine\level\biome` namespace. This is in preparation for future work on Levels which requires biome information (such as weather conditions).
- `WeakPosition` has been removed.
- Added `Level->getBiome()`.
- `Level->getSafeSpawn()` now always returns a `Position` instance.
- `Level->getBlockExtraData()` and `Level->setBlockExtraData()` have been removed (as well as their associated `Chunk` methods).
- `ChunkManager->isInWorld()` now accepts integers instead of floats.
- Added `SubChunkIteratorManager->invalidate()`.

#### Generator
- `BiomeSelector` has been refactored to make it simpler and more robust.
- Generator-management methods `registerDefaultGenerators()`, `addGenerator()`, `getGeneratorList()`, `getGenerator()`, and `getGeneratorName()` have been moved from `Generator` to a new `GeneratorManager` class.
- Static noise functions in the `Generator` base class have been moved to `Noise` instance methods.
- Added static method `Generator::convertSeed()`, which converts an int or string into a numeric seed for generation.

### Network
- `SourceInterface->process()` no longer returns a value.

### Plugin
- `PluginBase->getResources()` now returns an associative array where the index is the path to the resource relative to the plugin's `resources` directory.
- `PluginLoader`s have been almost completely rewritten to make them simpler and more robust.
  - `PluginManager->registerInterface()` does not return anything, and now accepts a `PluginLoader` instance instead of a `string`.
  - `PluginLoader`:
    - `getPluginFilters()`, `enablePlugin()` and `disablePlugin()` are removed.
    - `loadPlugin()` responsibilities are now solely confined to doing whatever is necessary to make the plugin's classes visible by the server, and does not emit log messages or check for data directories.
    - Added method `getAccessProtocol()` which determines what prefix to apply to the plugin path to access the files inside it (for example `phar://`).
  - `PluginBase->init()` and `PluginBase->isInitialized()` have been removed.
  - `Plugin` interface now declares a signature for the constructor which implementations must comply with.
  - `Plugin` interface now declares `setEnabled()`.
- It is now possible to create a custom `Plugin` implementation without requiring a custom `PluginLoader`.

### Scheduler
This release features major changes to how plugin task scheduling works.
- Removed `Server->getScheduler()`. All plugins now have their own scheduler which is accessible using `Plugin->getScheduler()`. Aside from being syntactically more concise and pleasant, this also allows much more effective management of tasks when plugins are disabled.
- Removed `PluginTask` class, because it's now unnecessary. Previously it was required to allow the server to delete tasks associated with a plugin when the plugin was disabled. With plugin-owned schedulers, this is no longer a requirement. Plugins may now utilize the `Task` class as a base if they like.
- Added `Server->getAsyncPool()`. Since the global scheduler does not exist any more, it does not manage the server's `AsyncPool` any more. Additionally, `ServerScheduler` was previously bloated by a lot of `AsyncTask` related methods, which are now not necessary because direct access to `AsyncPool` is granted instead.
- `ServerScheduler`:
  - `ServerScheduler` has been renamed to `TaskScheduler` since it is now a general-purpose task scheduler which is non-dependent on the user. This allows much greater flexibility and also makes it possible to unit-test.
  - All `AsyncTask`/`AsyncPool` related methods have been removed - the task scheduler does not manage the async pool anymore.
    - Calls to `Server->getScheduler()->scheduleAsyncTask()` should be replaced with `Server->getAsyncPool()->submitTask()`.
    - Calls to `Server->getScheduler()->scheduleAsyncTaskToWorker()` should be replaced with and `Server->getAsyncPool()->submitTaskToWorker()`.

### Tile
- Calling `scheduleUpdate()` on a `Tile` after it has been `close()`d will now cause an exception to be thrown.
- Tile NBT is now ephemeral and is not retained after creating the tile.
  - `Tile->namedtag` has been removed.
  - `Tile->saveNBT()` now returns a new `CompoundTag` containing saved data.
  - Added new protected methods `Tile->readSaveData()` and `Tile->writeSaveData()`. These should be overridden to add or read tile-specific data, instead of overriding `saveNBT()` and `__construct()`.

### Utils
- Added `MainLogger->getFormat()` and `MainLogger->setFormat()` to allow manipulating console output format.

## Gameplay
### General
- Fixed a range of block collision issues stemming from off-by-one errors when fetching areas.

### Blocks
- Fixed a crash which occurred when leaving a bed which was broken and replaced during sleep.
- Fixed dark oak and acacia saplings growing into oak trees - now they will not grow at all (they need to be implemented).
- Saplings now take light level into account when trying to grow.
- Ores and other blocks now drop experience when broken with an appropriate tool.

### Entities
- Fixed dropped items not being correctly destroyed by fire, cacti and other damage sources.

### Generation
- Grass no longer generates as the top layer of ground cover in river biomes.
- Ocean biomes now use gravel instead of grass+dirt for ground cover.
- Reduced maximum elevation of plains biomes to make them less bumpy.
- Snow layers and other can-be-flowed-into blocks no longer generate underwater.

### Items
- Buckets are no longer able to delete any block by replacing it with water.
- Dried Kelp, Bleach, Nautilus Shell and Heart of the Sea items are registered (although crafting recipes for these are not yet available).
- Implemented `Vanishing` enchantment.
- Implemented Totems.

### World
- Fixed explosions sometimes leaving behind air blocks with non-zero damage values.

# 3.0.1
- Fixed error when players move things around in the crafting grid after plugins cancel `PlayerInteractEvent` on crafting tables.

# 3.0.2
- Fixed memory dumps not showing private properties of parent classes.
- Fixed a memory leak when cancelling all tasks in the `TaskScheduler`.
- Fixed scheduled task timings showing `Unknown` as the plugin name.

# 3.0.3
- Fixed possible crash in Sign when placed by a plugin.
- Fixed slightly-damaged and very-damaged anvils dropping incorrect items.
- `Living->applyPostDamageEffects()` is no longer called if the mob died from an attack.
- Cooldown for mob attack is now reset prior to applying post-damage effects.
- Added constant `ItemIds::MUTTON` to resolve crashes using PC worlds.
- Fixed emerald ore not dropping XP when broken with a valid tool.
- Fixed mobs getting crazy vertical knockback if attacked while airborne.
- Fixed XP orbs continuing to follow dead players.

# 3.0.4
- Fixed RCON spamming the console when a client does not disconnect correctly.
- Fixed dropping chunk cache unnecessarily when no blocks need to be updated on a chunk.
- Fixed outdated block updates getting sent on chunks replaced using `setBlock()`.

# 3.0.5
- Fixed not being able to place blocks where a player died and has not yet respawned (#2265).
- Fixed mob death animation not being played when `Entity->kill()` is called directly or `/kill` is used.
- Fixed viewers of different halves of double chests not seeing changes made by viewers who opened the other half (#2261).
- Fixed bugs setting items into wrong indexes when double chest halves have differently sized inventories.
- Fixed `getConfig()` crashing when called when the plugin's data directory doesn't exist.
- Fixed a possible exploit with keychain signing for XBL login.

# 3.0.6
- Fixed invalid keys in `.properties` config files being considered as invalid strings.
- Fixed whitespace between key and value `key = value` being invalid in `.properties` config files.
- Fixed a bug in exception message when an invalid permission type is written for a command in plugin.yml.
- Properly fixed newline issues when parsing event handler annotations - `@notHandler` will now work as expected when CRLF line endings are used.
- Fixed `PluginManager->registerEvents()` registering functions as event handlers declared by parent classes which are not `Listener` instances (#2293).

# 3.0.7
- Fixed setting spawn points in un-generated chunks causing the player to fall out of the world.
- Fixed spawn protection deactivating when there are no ops set (this was an unwanted/unexpected feature, so it's considered a bug).
- Fixed cursor items not getting dropped when closing the inventory or dying.
- Fixed more issues with blocks with invalid metadata appearing as update! blocks.
- `Entity->setNameTagAlwaysVisible()` now works (although nametags will still not be shown if the entity is invisible, due to a behavioural change in Minecraft PE).
- Fixed errors passing zero motions to projectiles in some cases.

# 3.0.8
- Fixed player on-ground state not updating when moving horizontally. This allowed fly hacks with the built in anti-cheat, and also affected some third party anti-cheat plugins due to the effect on `inAirTicks`.
- Fixed knockback. PC 1.9-style knockback was mistakenly introduced in 3.0.3. This has now been reverted back to the old 1.8-style behaviour.

# 3.0.9
- Cleaned up odd behaviour of `/kill` due to old broken code.
- Fixed patch level check for plugin APIs not allowing lesser patch versions on greater minor versions.
- Fixed `/timings paste`. This now reports directly to the timings host instead of using Ubuntu Pastebin.
- Minor code cleanups in various places.
- Zip resource packs will now give slightly less useless errors - errors for broken manifest have been separated from those with fields missing, and now reports why decoding failed if it failed.

# 3.0.10
- Syntax error crashdumps will no longer be reported to the crash archive.
- Chunk sending is now fault-tolerant. Before this release, any error on a worker during async chunk sending (such as memory errors caused by pthreads) would cause that chunk to never get sent, resulting in invisible and missing chunks. Levels will now attempt to retry chunk prepare when a task crashes, which should fix most invisible chunk bugs.
- `MainLogger` now logs exception stack traces in a synchronized block to ensure that they are coherent when log messages are emitted from multiple threads at once.
- `AsyncTask->isCrashed()` now returns `true` if a fatal error occurred during the task execution.

# 3.0.11
- `DropItemAction` will now consider itself invalid if attempting to drop a null item.
- Fixed leaking globally broadcasted Level packets when no players are on the server.
- Fixed title bar not being cleared on server stop on some terminals.
- Fixed `FallingBlock` saving corrupted data.
- Fixed the structure of `GuiDataPickItemPacket`.
- Cleaned up some code in `OfflinePlayer`.
- Splash potions no longer apply effects to dead (but not yet respawned) players.
- Coal ore no longer drops XP when mined with a silk touch tool.
- Item entities now cannot be picked up when a negative pickup delay is used.

# 3.0.12
- `Config` keys which are considered bools by YAML 1.1 will no longer be transformed into 1 or 0.
- Fixed painting motives not getting saved.
- Fixed cacti spewing items when placed in some invalid locations.
- Fixed entity fire damage not applying in the void.
- Fixed entities not getting updated appropriately in some conditions.

**For Minecraft: Bedrock Edition 1.5.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on this build and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the changes in this build.

**This build contains changes to the **protocol** which are not covered by the API version. To lock your plugin to a specific protocol version, declare the `mcpe-protocol` attribute in your `plugin.yml`.

# 3.1.0
- Support for Minecraft: Bedrock Edition version 1.5.0

# 3.1.1
- Fixed player on-ground state not updating when moving horizontally. This allowed fly hacks with the built in anti-cheat, and also affected some third party anti-cheat plugins due to the effect on `inAirTicks`.
- Fixed knockback. PC 1.9-style knockback was mistakenly introduced in 3.0.3. This has now been reverted back to the old 1.8-style behaviour.

# 3.1.2
- Cleaned up odd behaviour of `/kill` due to old broken code.
- Fixed patch level check for plugin APIs not allowing lesser patch versions on greater minor versions.
- Fixed `/timings paste`. This now reports directly to the timings host instead of using Ubuntu Pastebin.
- Minor code cleanups in various places.
- Zip resource packs will now give slightly less useless errors - errors for broken manifest have been separated from those with fields missing, and now reports why decoding failed if it failed.
- Added constant `Entity::DATA_FLAG_SHOW_TRIDENT_ROPE`.

# 3.1.3
- Syntax error crashdumps will no longer be reported to the crash archive.
- Chunk sending is now fault-tolerant. Before this release, any error on a worker during async chunk sending (such as memory errors caused by pthreads) would cause that chunk to never get sent, resulting in invisible and missing chunks. Levels will now attempt to retry chunk prepare when a task crashes, which should fix most invisible chunk bugs.
- `MainLogger` now logs exception stack traces in a synchronized block to ensure that they are coherent when log messages are emitted from multiple threads at once.
- `AsyncTask->isCrashed()` now returns `true` if a fatal error occurred during the task execution.

# 3.1.4
- `DropItemAction` will now consider itself invalid if attempting to drop a null item.
- Fixed leaking globally broadcasted Level packets when no players are on the server.
- Fixed title bar not being cleared on server stop on some terminals.
- Fixed `FallingBlock` saving corrupted data.
- Fixed the structure of `GuiDataPickItemPacket`.
- Cleaned up some code in `OfflinePlayer`.
- Splash potions no longer apply effects to dead (but not yet respawned) players.
- Coal ore no longer drops XP when mined with a silk touch tool.
- Item entities now cannot be picked up when a negative pickup delay is used.
- Fixed extra byte at the end of `PlayerSkinPacket` not being read (1.5 protocol change that somehow got lost).

# 3.1.5
- `Config` keys which are considered bools by YAML 1.1 will no longer be transformed into 1 or 0.
- Fixed painting motives not getting saved.
- Fixed cacti spewing items when placed in some invalid locations.
- Fixed entity fire damage not applying in the void.
- Fixed entities not getting updated appropriately in some conditions.

# 3.1.6
- Fixed players disconnected during login verification getting leaked and not destroyed correctly.
- Updated NBT dependency to 0.2.1 to receive bug fixes (see https://github.com/pmmp/NBT/releases/tag/0.2.1).

# 3.1.7
- Errors thrown during level tick will now crash the server instead of spamming the console.
- Fixed arrows despawning too soon after hitting the ground.
- Fixed projectiles despawning before colliding if they were airborne for > 60 seconds.

# 3.1.8
- Fixed levels unloaded during an earlier level's tick on the same tick causing a crash.
- PermissibleBase->clearPermissions() now properly unsubscribes from all permissions.
- Fixed incorrect break check for standing torch.
- Fixed drops for brewing stand.
- Fixed block picking brewing stand, bed, double slab, cake, farmland, and mob heads giving the wrong items.
- Fixed blocks not placing correctly when clicking on redstone ore.
- Fixed unknown PC items in tile inventories crashing the server - now they'll be quietly removed instead.
- Fixed server freezing when eating chorus fruit from high altitude.
- `readline` is now disabled by default on Windows and must be explicitly enabled with `--enable-readline` due to thread-safety issues.
- Fixed server crash when trying to use non-implemented splash potions.
- Removed incorrect maximum region file size cap which may have caused some worlds to be incorrectly detected as corrupted.

**For Minecraft: Bedrock Edition 1.6.0**

This is a minor feature release, including support for Minecraft Bedrock 1.6.0, some new minor gameplay features and some API deprecations and additions.

### Note
Plugins compatible with any previous 3.x.y version will also run on this build and do not need API bumps.

However, some API features have been deprecated in this version. Plugin developers do not need to do anything about these deprecations immediately, however they may raise harmless warnings if used.

Features marked **`@deprecated`** are **recommended** not to be used, but will continue to work for any future 3.x.y versions. They will be removed in the next major release (4.0).

# 3.2.0
### Core
- `Level` generators are now registered only when needed instead of as soon as a worker starts. This drastically reduces memory consumption on servers with lots of workers.
- Async workers are now garbage-collected along with everything else on the default schedule. Idle workers with 0 queued tasks will be shutdown and removed from the pool to reduce memory usage.
- UPnP error messages are now more informative of troubleshooting steps.
- Errors are no longer caught in cases where they are unrecoverable.

### API
#### Entity
- Arrow pickup mode can now be controlled via `Arrow->setPickupMode()`. This accepts one of three `Arrow` constants: `PICKUP_NONE`, `PICKUP_ANY`, `PICKUP_CREATIVE`.
- Added new API methods `Projectile->getBaseDamage()` and `Projectile->setBaseDamage()`.
- Added new API methods `Entity->getScoreTag()` and `Entity->setScoreTag()`.

#### Events
- The `Listener` interface has now received in-depth documentation about its behaviour and uses. See the top of the `Listener` class to read it.
- It is now possible to declare `@ignoreCancelled` on an event handler without specifying `true` or `false`. If no value is found, `true` will be assumed.
- `ServerCommandEvent` and `RemoteServerCommandEvent` are now **`@deprecated`** and their usage discouraged. A new generic `CommandEvent` has been introduced in its place, which allows capturing commands from any type of command sender. This was done in response to difficulties of code duplication when wanting to intercept commands from both console and players.
- `EntityDamageEvent`
  - Added `MODIFIER_WEAPON_ENCHANTMENTS` constant for attack damage bonuses due to enchantments like Sharpness.
  - Added new API methods `getAttackCooldown()` and `setAttackCooldown()` to allow controlling Living entities attack cooldown times (default 10 ticks).
- `PlayerDeathEvent`: Added new static method `deriveMessage()`.
- `PlayerKickEvent`: Added new method `setReason()`.

#### Forms
- Added a new `pocketmine\form\Form` interface. Implementing this interface permits custom form implementations to make use of `Player->sendForm()`, eliminating the need to handle packets directly and also solving the form ID collision problem.

#### Items
- `Item` and `ItemFactory` now support negative item IDs (needed for future extended blocks support).
- Updated `ItemIds` interface with new constants.

#### Permission
- Added a new `PermissionManager` class which encapsulates all of the permission-management functionality originally bloating `PluginManager`. The API is identical to that of `PluginManager`'s permission API. All methods moved to `PermissionManager` have **`@deprecated`** redirects remaining behind in `PluginManager`, which will be removed in the next major release (4.0).

#### Plugin
- `PluginBase->getConfig()` will now automatically save the default config if it does not already exist.
- Plugin data directories will now be automatically created on plugin load, eliminating the need for boilerplate `@mkdir($this->getDataFolder())` calls at the top of every plugin.

#### Tile
- `Tile::createNBT()` will now throw a `BadMethodCallException` when called directly.

#### Utils
- `Utils::getURL()`, `Utils::postURL()`, `Utils::simpleCurl()` and `Utils::getIP()` have been moved to a new `pocketmine\utils\Internet` class. The original methods are **`@deprecated`** and will be removed for the next major version (4.0).
- Removed the ability for `Config` to be asynchronously saved. This was discussed for removal because of various problems that it causes. It was deemed not worth fixing since `Config` saving should not be significant enough to cause problems anyway. See #2298 for details.

#### Server
- Deprecated `level` parameter of `findEntity()`. This parameter was premature optimization. Code using it will continue to work as before.

### Gameplay
#### General
- Air bubbles are now regenerated at the same speed as vanilla UpdateAquatic, instead of instantly when leaving water.
- Implemented Conduit Power effect.

#### Enchantments
- Implemented the following enchantments: Thorns, Sharpness, Knockback, Fire Aspect, Power, Punch, Flame, Infinity, Mending.

#### Items
- Added the following new items: `Scute`

# 3.2.1
- Fixed `VerifyLoginTask` completion bug when players get disconnected prior to the task completing.
- Fixed client crash issue due to outdated runtime ID mappings.

# 3.2.2
- Updated NBT dependency to 0.2.1 to receive bug fixes (see https://github.com/pmmp/NBT/releases/tag/0.2.1).

# 3.2.3
- Errors thrown during level tick will now crash the server instead of spamming the console.
- Fixed arrows despawning too soon after hitting the ground.
- Fixed projectiles despawning before colliding if they were airborne for > 60 seconds.
- Fixed crash related to Flame enchantment when the player shooting the arrow was on fire.

# 3.2.4
- Fixed levels unloaded during an earlier level's tick on the same tick causing a crash.
- PermissibleBase->clearPermissions() now properly unsubscribes from all permissions.
- Fixed incorrect break check for standing torch.
- Fixed drops for brewing stand.
- Fixed block picking brewing stand, bed, double slab, cake, farmland, and mob heads giving the wrong items.
- Fixed blocks not placing correctly when clicking on redstone ore.
- Fixed unknown PC items in tile inventories crashing the server - now they'll be quietly removed instead.
- Fixed server freezing when eating chorus fruit from high altitude.
- `readline` is now disabled by default on Windows and must be explicitly enabled with `--enable-readline` due to thread-safety issues.
- Fixed server crash when trying to use non-implemented splash potions.
- Removed incorrect maximum region file size cap which may have caused some worlds to be incorrectly detected as corrupted.

# 3.2.5
- `Player->sendForm()` now throws a proper exception when failing to JSON-encode `Form` objects given to it.
- Fixed crash when handling later packets in a batch when an earlier packet triggered termination of the player's connection.
- Fixed a race condition causing progress updates in `AsyncTasks` to be lost when published near completion.
- Fixed bad decoding for some packets with unsupported structures.
- Crash dumps no longer report 20 empty lines when an error occurs in `eval()`'d code.
- `pocketmine/nbt` dependency updated to `0.2.2` to fix bugs (see NBT repo for changelog).

# 3.2.6
- Chunk ticking no longer occurs in chunks which have an adjacent unloaded chunks, fixing things like grass ticking triggering unintentional chunk loading.
- Fixed some lighting propagation issues where step count is the same but light level is different.
- Fixed full-chunk light repopulation producing broken lighting when the generator hasn't been registered on a worker.
- Fixed a missing field in `MoveEntityDeltaPacket`.
- Added client-sided rate limiting for crashdump reporting to mitigate involuntary DDoS of the crash archive.
- Fixed a bug in `start.cmd` where quotes would appear around the "couldn't find installation" message.

# 3.2.7
- Added a network-layer check for item NBT size to avoid unexplained client-sided crashes due to length overflow.
- Fixed some desync bugs with double chests when one half of a double chest is unloaded.
- Anonymous class timings will now have a cleaned path for the identifier relative to the plugins directory.
- Anonymous class timings now render correctly on timings.pmmp.io.
- Fixed empty garbage subchunks not getting removed from long-life chunks.
- `start.ps1`, `start.sh` and `start.cmd` no longer recognize source-code installations. Since source-code installations should only be used by developers who know what they are doing anyway, this was considered unwise to keep.
- Fixed a bug/oversight in network chunk preparation that caused chunk prepare to be 4x slower than necessary.
- `Chunk->fastSerialize()` now doesn't serialize useless data (data is omitted based on chunk flags). This significantly reduces the amount of useless data getting copied for generation, population and light calculation.
- `TaskHandler->cancel()` was incorrectly marked as `@internal` in 2014. This has been fixed. Plugin developers should in fact prefer `TaskHandler->cancel()` since it does not require a task to have a circular dependency on its own executor.

**For Minecraft: Bedrock Edition 1.7.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the bug fixes in this build.

# 3.3.0
- Compatibility with Minecraft: Bedrock Edition 1.7.0
- Removed compatibility with 1.6.0
- `Player->sendForm()` now throws a proper exception when failing to JSON-encode `Form` objects given to it.
- Fixed crash when handling later packets in a batch when an earlier packet triggered termination of the player's connection.
- Fixed a race condition causing progress updates in `AsyncTasks` to be lost when published near completion.
- Fixed bad decoding for some packets with unsupported structures.
- Crash dumps no longer report 20 empty lines when an error occurs in `eval()`'d code.
- `pocketmine/nbt` dependency updated to `0.2.2` to fix bugs (see NBT repo for changelog).

# 3.3.1
- Chunk ticking no longer occurs in chunks which have an adjacent unloaded chunks, fixing things like grass ticking triggering unintentional chunk loading.
- Fixed some lighting propagation issues where step count is the same but light level is different.
- Fixed full-chunk light repopulation producing broken lighting when the generator hasn't been registered on a worker.
- Fixed a missing field in `MoveEntityDeltaPacket`.
- Added client-sided rate limiting for crashdump reporting to mitigate involuntary DDoS of the crash archive.
- Fixed a bug in `start.cmd` where quotes would appear around the "couldn't find installation" message.

# 3.3.2
- Added a network-layer check for item NBT size to avoid unexplained client-sided crashes due to length overflow.
- Fixed some desync bugs with double chests when one half of a double chest is unloaded.
- Anonymous class timings will now have a cleaned path for the identifier relative to the plugins directory.
- Anonymous class timings now render correctly on timings.pmmp.io.
- Fixed empty garbage subchunks not getting removed from long-life chunks.
- `start.ps1`, `start.sh` and `start.cmd` no longer recognize source-code installations. Since source-code installations should only be used by developers who know what they are doing anyway, this was considered unwise to keep.
- Fixed a bug/oversight in network chunk preparation that caused chunk prepare to be 4x slower than necessary.
- `Chunk->fastSerialize()` now doesn't serialize useless data (data is omitted based on chunk flags). This significantly reduces the amount of useless data getting copied for generation, population and light calculation.
- `TaskHandler->cancel()` was incorrectly marked as `@internal` in 2014. This has been fixed. Plugin developers should in fact prefer `TaskHandler->cancel()` since it does not require a task to have a circular dependency on its own executor.

# 3.3.3
- Development build error messages are now more user friendly.
- Fixed meta-only changes not getting saved correctly in `SubChunk->setBlock()`.
- Server will now sleep for up to 120 seconds on a crash if the uptime was less than 120 seconds. This delay is intended to reduce crash archive spam and can be skipped by the user if attended by pressing CTRL+C.
- Fixed preprocessed builds sometimes having `new ` calls treated as function calls.
- Fixed a rare corruption case where player data could be written incorrectly due to a race condition.
- `DataPacket` will now throw errors when attempting to read/write nonexisting fields to make it easier to debug protocol change errors.

# 3.3.4
- Fixed an undefined `DataPacket` field making the previous release unusable.

**For Minecraft: Bedrock Edition 1.7.0**

This is a cumulative minor release featuring performance improvements, memory usage improvements, some new minor gameplay features, some API deprecations and additions, and significant changes to error handling.

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.

However, some API features have been deprecated in this version. Plugin developers do not need to do anything about these deprecations immediately, however they may raise harmless warnings if used.

Features marked **`@deprecated`** are **recommended** not to be used, but will continue to work for any future 3.x.y versions. They will be removed in the next major release (4.0).

# 3.4.0
## Core changes
### Performance & memory improvements
- Entity `EXHAUSTION` attribute is no longer synced to the client, which reduces network traffic for survival players and reduces client-sided lag.
- A redundant call was removed from an `Event` call hot path which improves event calling performance by ~15% per event handler executed.
- Light updates are now batched together and executed on the end of each tick. The effects of this are noticeable when setting a large number of blocks in a close area - significant performance improvements should be noticeable for world editors (the ones that didn't disable light updates) and liquid flow is now significantly less expensive.
- Internal enhancements have been made to subchunk light array interfacing to reduce branching and improve access performance.
- Memory usage of most chunks has dropped by ~30-40% due to some improvements to internal storage of unlit subchunks. In real terms this translates to ~30% memory usage reduction for a freshly generated world.

### Error handling
The most notable core change in this release revolves around error handling. Internals have been cleaned up substantially to improve the server behaviour under occurrence of unexpected behaviour. The goal of this is to improve consistency and quality while reducing undefined runtime behaviour.
The following changes have been made:
- Throwing **unexpected** `Throwable`s in the following cases will now cause a server crash (except on network (this will be changed in the future)):
  - Event handlers
  - `Task->onRun()` on a scheduler
  - `AsyncTask->onCompletion()`
  - `Command->execute()` and `CommandExecutor->onCommand()`
- Unexpected `Throwable`s thrown during packet handling will now cause the target player to be disconnected with an `Internal server error` message.

### Other changes
- Anti-flight has been removed, along with the `allow-flight` directive in `server.properties`.
- Server language is now controlled by the `language` directive in `server.properties`.
- Added `unban` and `unban-ip` as aliases of `pardon` and `pardon-ip` commands respectively.

## API changes
### Block
- `BlockSpreadEvent` is now fired when lava or water tries to flow into a block.
- `BlockFormEvent` is now fired when lava and water collide to form cobblestone, obsidian or stone.

### Event
- Added new method `Event->call()`. This should be used instead of `PluginManager->callEvent()` in plugins only supporting 3.4+.
- `PluginManager->callEvent()` has been `@deprecated`.

### Level
- Attempting to unload a level during its tick will now throw an `InvalidStateException`.
- Added the following new methods:
  - `Level->broadcastPacketToViewers()`
  - `Level->getViewersForPosition()`
  - `Level->broadcastGlobalPacket()`
  - `Level->getChunkAtPosition()`
  - `Level->isInLoadedTerrain()`
- `Level->addGlobalPacket()` has been `@deprecated`.
- `LightUpdate` now allows calling `setAndUpdateLight()` for the same position multiple times (needed for light update batching).

### Permission
- `Permission::getByName()` now throws an exception on invalid values instead of silently returning `DEFAULT_FALSE`. This may cause new errors to appear if your plugins had broken permission defaults in `plugin.yml`.

### Player
- `addWindow()` now has stricter validity checks and will now throw exceptions in the following cases: No window IDs left to use, and when a forced window ID collides with an existing window.
- The public `$speed` field has been removed (this was only used by anti-cheat which has now been removed).

### Scheduler
- `AsyncTask->setResult()` has had the `$serialize` parameter removed - now it will automatically serialize (or not) as appropriate.
- Added a new `ClosureTask` which allows concisely scheduling closure execution on a `TaskScheduler`.
- `TaskScheduler->__construct()` `$logger` parameter has been `@deprecated` and will be removed in a future major version.

### Server
- Added new method `Server->hasOfflinePlayerData(string $name) : bool`.
- `Server->getAllowFlight()` has been `@deprecated`.

### Utils
- `Config->save()` will no longer catch unexpected exceptions thrown while encoding data.

## Gameplay changes
### Blocks
- Rail connectivity has been implemented for normal, powered, detector and activator rails (but there are currently no minecarts).

# 3.4.1
- Updated crashdump format to be compatible with newest CA. This version or newer is required if you want to be able to submit crashdumps to crash.pmmp.io.

# 3.4.2
- `DataPacket` errors when writing to undefined fields are now more clear.
- Fixed trees being able to overwrite the log parts of other trees.
- Fixed `Player->sendForm()` not working during `PlayerJoinEvent`.
- `Entity->setScale()` now explicitly requires a scale larger than 0.
- Adding invisible `FloatingTextParticle` to a level no longer causes an error.

# 3.4.3
- Fixed burning TNT setting hurt entities on fire when exploding.
- `~` relative coordinates now work in the `/particle` command.
- Various boring fixes to error stack trace reporting.
- `Level->setChunk()` no longer deletes tiles and entities when replacing a chunk with itself.
- Fixed a generator race condition causing rare appearances of half-trees on the client in freshly generated terrain.
- `Attribute->resetToDefault()` now fits the default per the min/max bounds, fixing crashes when the bounds are changed to exclude the default.
- Fixed a crash with LevelDB worlds when the `TAG_2D_MAPS` tag is missing.
- Fixed `Utils::getCoreCount()` crashing on some Debian variants.

**For Minecraft: Bedrock Edition 1.8.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the changes in this build.

# 3.5.0
- Compatibility with Minecraft: Bedrock Edition 1.8.0
- Removed compatibility with 1.7.0

# 3.5.1
- Fixed internal server errors when attempting to craft.
- `DataPacket` errors when writing to undefined fields are now more clear.
- Fixed trees being able to overwrite the log parts of other trees.
- Fixed `Player->sendForm()` not working during `PlayerJoinEvent`.
- `Entity->setScale()` now explicitly requires a scale larger than 0.
- Adding invisible `FloatingTextParticle` to a level no longer causes an error.

# 3.5.2
- Updated some misc protocol magic numbers.
- Fixed burning TNT setting hurt entities on fire when exploding.
- `~` relative coordinates now work in the `/particle` command.
- Various boring fixes to error stack trace reporting.
- `Level->setChunk()` no longer deletes tiles and entities when replacing a chunk with itself.
- Fixed a generator race condition causing rare appearances of half-trees on the client in freshly generated terrain.
- `Attribute->resetToDefault()` now fits the default per the min/max bounds, fixing crashes when the bounds are changed to exclude the default.
- Fixed a crash with LevelDB worlds when the `TAG_2D_MAPS` tag is missing.
- Fixed `Utils::getCoreCount()` crashing on some Debian variants.

# 3.5.3
- Rewritten documentation of `PlayerPreLoginEvent`, `PlayerLoginEvent` and `PlayerJoinEvent`. They are now much more detailed and no longer misleading.
- Chest items block-picked from double chests will no longer place chests that crash the server when opened.
- Ender chests now make the correct sounds when opening and closing.
- Fixed Sign errors when a buggy or malicious client sent broken NBT with the wrong tags or wrong number of lines.
- Resource packs with comments in the manifest will now load correctly. (MOJANG!!!)
- Placement of unknown blocks is now disallowed. This solves a range of problems with invalid blocks in the world, such as #2260 .
- Errors thrown during `PlayerQuitEvent` or other `Player->close()` errors will now crash the server instead of causing cryptic bugs later on.
- Fixed large chunks (>= 1044476 bytes) becoming corrupted when saved in Region-based worlds - now an exception is thrown instead.
- Reduced the range of exceptions caught during chunk loading. Now, only chunk corruption errors are caught, and anything else will produce a crash.
- Removed catch-all block on chunk saving. Unexpected errors thrown during chunk save will now create a crash.
- Fixed some asserts in packet decode methods.
- `Attribute` now throws exceptions with more informative messages on errors.
- Properly handled some remaining `Uninitialized string offset` bugs when decoding packets.
- Fixed chunk updates taking several seconds to show up on the client. This bug was most apparent during generation and some world editing tools using asynchronous tasks.
- Fixed CPU waste ordering chunks for non-moving players.

# 3.5.4
### Fixes
- Fixed server crash when a block update occurs on a torch with corrupted metadata.
- Added a hack to mitigate client-side right-click spam bug. This mostly eliminates spam of `PlayerInteractEvent` on right-click.
- Players will no longer see commands they don't have permission to use in client-sided hints when typing a `/` in the chat window.
- `Event->isCancelled()` and `Event->setCancelled()` now throw more informative errors.
- Errors thrown during a network interface processing will now _actually_ crash the server.

### API changes
- Deprecated `NetworkInterfaceCrashEvent`. Nobody should have been using this anyway.
- Deprecated `Network->processInterface()`
- Deprecated `SourceInterface->emergencyShutdown()`

# 3.5.5
- Mobs no longer spawn with their heads facing a different direction to their bodies.
- Added a console message when the crash strangler sleeps to stop crash spam.
- Fixed crash in `/title` command `times` subcommand when not enough arguments were passed.
- AsyncWorkers will now not be shut down on GC unless they have not been used for the last 5 minutes. This reduces lag spikes on garbage collection.
- Fixed some unhandled error cases in `AddEntityPacket` encoding.
- Fixed `LogicException` descendents being thrown from some packet decoding methods when encountering bad userdata.
- Player network inventory transaction processing now catches more specific errors.
- Fixed missing decode for `TakeItemEntityPacket`.
- Fixed `/gc` and `/status` truncating memory statistics - now they report to 0.01 precision.
- Global functions and constants are now imported to improve performance.
- Fixed a typo in `pocketmine.command.op.take` description.
- Ice no longer creates water when a creative player breaks it.
- `spawn-mobs` and `spawn-animals` no longer appear in generated `server.properties` on a newly-installed server.
- Added a hack to disable pre-spawn client-sided movement.
- Assertions enabled warning now always shows when `zend.assertions` is not `-1`. The config option to disable this warning has been removed.
- `/status`,`/dumpmemory` and `/gc` are now enabled by default. The `debug.commands` config option has been removed.
- Crash dumps are now more thorough at catching plugin-related crashes.

# 3.5.6
- Fixed `#`-commenting properties in `.properties` files not working.
- `pocketmine.yml` now permits writing `worldname:` with no generation settings in the `worlds` section to force a world to be loaded.
- Fixed Bow force being too low - now it's consistent with Minecraft Java (but not with Bedrock due to a vanilla bug).
- Fixed `recursion detected` bug when encoding crashdumps in some cases.
- Items with too-large NBT tags on network will now have their tags ignored when sending over network, instead of crashing the server. This is a workaround for a protocol bug which will be addressed in a future Minecraft release.
- `/enchant` no longer crashes the server when out-of-bounds enchantment levels are used.
- Fixed some crashes loading Region-based worlds when encountering unexpected EOF.
- `Entity->fireTicks` is now protected (but accessible by magic method for BC purposes) and will now throw an exception when written to if the value is > 32767 or < 0.
- Fixed Signs asserting on corrupted world data with more than 4 lines of text per sign.

# 3.5.7
- Fixed several bugs in RCON packet receive that would allow an attacker to block or crash the RCON thread, denying service to other legitimate RCON clients.
- Fixed RCON connections not working (timing out with no response) on some platforms.
- Logins are now permitted to have up to 60 seconds clock drift on the `nbf` and `exp` timestamps in the login JWT.
- Fixed XP orbs following players who switched to a location spatially nearby in a different world.
- `Player->removeWindow()` now throws `InvalidArgumentException` instead of `BadMethodCallException` when trying to non-forcefully remove a fixed window ID.

# 3.5.8
- Fixed player XP not dropping if a player was fast enough to respawn.
- Player XP drop amount now matches vanilla (7x level points, incurs some loss of points for higher levels)
- Fixed Doxygen configuration including test sources.
- Improved performance of block-cache accesses.
- Improved performance of random block-ticking.
- Closure tasks will now show the correctly formatted name on timings.
- Fixed a crash when a local update happens next to an `ItemFrame` with invalid metadata.
- Fixed player being subscribed to broadcast permissions too early when permissions are modified before spawn.
- Block-picking is now disallowed on unknown blocks.
- Internal IP detection now works correctly on all platforms.
- Fixed UPnP portforwarding not working correctly when multiple network adapters are installed.
- Starting or stopping flight now resets fall distance and in-air ticks.
- Fixed falling causing starvation.
- Fixed crops consuming bone meal when fully grown.
- Users are no longer able to avoid agreeing to the license by restarting the server.
- Explosions no longer create broken double chests which crash the server. Existing chests affected by this bug will continue to crash. This will be addressed in a future release.
- Cactus and sugarcane no longer grow through non-air blocks.
- Fixed a memory leak in `setChunk()` when the `unload` parameter is true.
- Generator will now crash if preset is invalid, instead of producing unexpected results.

# 3.5.9
- Fixed a `setChunk()` bug introduced by 3.5.8.
- Applied a hack to disable client-sided automatic regeneration.
- `Level->getChunkPlayers()` is now deprecated.

# 3.5.10
- Some internal `Level` functions are now correctly marked `@internal`.
- Fixed splash potion distance being measured from player feet instead of eye height.
- Fixed tall grass being unplaceable on dirt.
- A debug message is now recorded when a chunk is loaded with no associated loaders.
- Composer dependencies have been updated to fix bugs in some dependencies.

# 3.5.11
- Fixed crashing when items with negative IDs are found in the inventory (caused by downgrading from dev builds).
- Updated creative inventory and crafting recipes.

# 3.5.12
- Fixed crash when too-large values are given to `/effect` for duration.
- `/op` and other commands no longer crash when an invalid player name is given.
- Startup time no longer includes the time spent in the setup wizard.
- `TextFormat::clean()` is now UTF-8 aware, and will scrub any invalid UTF-8 characters from the given string.
- Fixed `TextFormat::clean()` not fully removing ANSI escape codes in some cases.
- Fixed Korean command arguments failing to parse.
- `Sign->setText()` and `Sign->setLine()` now enforce that the given text must be UTF-8 text, or an exception will be thrown.
- Sign text is now processed by `mb_scrub()` immediately after loading to remove invalid UTF-8 characters that could crash the client.
- `Human->exhaust()` no longer underflows when the hunger attribute has a fractional value.

# 3.5.13
- Added a hack to disable client sided AI for non-moving entities. This fixes items floating in water despite it not being implemented server-side yet.
- Fixed max health not working as expected on respawn if changed by plugins.
- Fixed Item Frame hardness (0.25 instead of 0).
- Fire Aspect tools will now light TNT when right-clicked with.
- Fixed incorrect nullable typehints on `TaskScheduler` return values.

**For Minecraft: Bedrock Edition 1.9.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the changes in this build.

This changelog **does not account for protocol changes**. If your plugin uses the protocol, you're not shielded by API change constraints.

# 3.6.0
- Compatibility with Minecraft: Bedrock Edition 1.9.0
- Removed compatibility with 1.8.0
- `Item->getCompoundTag()` is now `@deprecated`.
- `Item->setCompoundTag()` now accepts NULL as a possible value.
- `ItemFactory::fromString()` now accepts NULL for the `tags` parameter.

# 3.6.1
- Fixed crashing when items with negative IDs are found in the inventory (caused by downgrading from dev builds).
- Updated creative inventory and crafting recipes.
- Fixed handling for some new blocks which magically appeared without appropriate implementations (extra meta values).

# 3.6.2
- Fixed client-sided crash when upper-case letters appear in command names.
- Fixed crash when too-large values are given to `/effect` for duration.
- `/op` and other commands no longer crash when an invalid player name is given.
- Startup time no longer includes the time spent in the setup wizard.
- `TextFormat::clean()` is now UTF-8 aware, and will scrub any invalid UTF-8 characters from the given string.
- Fixed `TextFormat::clean()` not fully removing ANSI escape codes in some cases.
- Fixed Korean command arguments failing to parse.
- `Sign->setText()` and `Sign->setLine()` now enforce that the given text must be UTF-8 text, or an exception will be thrown.
- Sign text is now processed by `mb_scrub()` immediately after loading to remove invalid UTF-8 characters that could crash the client.
- `Human->exhaust()` no longer underflows when the hunger attribute has a fractional value.

# 3.6.3
- Added a hack to disable client sided AI for non-moving entities. This fixes items floating in water despite it not being implemented server-side yet.
- Fixed max health not working as expected on respawn if changed by plugins.
- Fixed Item Frame hardness (0.25 instead of 0).
- Fire Aspect tools will now light TNT when right-clicked with.
- Fixed incorrect nullable typehints on `TaskScheduler` return values.

# 3.6.4
- `NetworkStackLatencyPacket` unhandled debug has been silenced.
- Fixed `Player->removeWindow()` removing GUI or crashing clients when removing a window which was not added.
- Fixed packed ice dropping itself when mined without a silk touch pickaxe.
- Fixed players not taking fall damage when falling off the side of a ladder when their AABB was intersecting with the ladder's full block area.
- Fixed arrows reloaded from disk never despawning.
- Fixed player XP not dropping on death.
- Fixed player's held slot being out of sync when respawning.
- Fixed items with different NBT being considered stackable in some cases by `BaseInventory->canAddItem()`.

# 3.6.5
- Fixed stdout silence on crash if a crash occurs when PHP output buffering is enabled.
- Fixed `RegionLoader` considering a range of invalid chunk coordinates as valid.
- Fixed `RegionLoader` causing region header corruption when an oversized chunk was discovered. This was causing entire regions to be discarded next time they were freshly loaded.
- Fixed performance issue loading old LevelDB worlds (from before MCPE 1.0) due to unmodified chunks being converted every time they were loaded.
- Added new debug messages when a world takes too long (longer than 50ms) to complete a tick.
- Debug messages are now logged when autosave kicks in (with time measurements), which helps debugging unexplained lag spikes.
- Level "auto tick rate" anti-feature and its associated `pocketmine.yml` settings have been removed (see #2665). The settings will persist in old configurations, but will be ignored by this version and future versions.
- The `/save-all` command now outputs custom (non-vanilla) messages informing the user how long it took to complete autosaving.
- The word `level` has been replaced with `world` (where appropriate) throughout language strings and general user interface messages.

# 3.6.6
- Fixed protocol argument types for commands.
- Autosave debug message will now report in milliseconds when the time taken is less than 1 second.
- Flatworld presets now allow `*` as a multiplier symbol (fixes PC compatibility).
- Network runtimeIDs for blocks are now randomized to prevent things (like plugins) relying on them.
- Updated NBT dependency to 0.2.7 for some bug fixes.

**For Minecraft: Bedrock Edition 1.10.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the changes in this build.

This changelog **does not account for protocol changes**. If your plugin uses the protocol, you're not shielded by API change constraints.

# 3.7.0
- Compatibility with Minecraft: Bedrock Edition 1.10.0
- Removed compatibility with 1.9.0

# 3.7.1
- Fixed protocol argument types for commands.
- Autosave debug message will now report in milliseconds when the time taken is less than 1 second.
- Flatworld presets now allow `*` as a multiplier symbol (fixes PC compatibility).
- Network runtimeIDs for blocks are now randomized to prevent things (like plugins) relying on them.
- Updated NBT dependency to 0.2.7 for some bug fixes.

# 3.7.2
- Fixed a memory leak when `PlayerLoginEvent` is cancelled.
- Fixed permissions `pocketmine.command.ban.list`, `pocketmine.command.difficulty`, `pocketmine.command.whitelist.enable` and `pocketmine.command.whitelist.disable` always being granted to operators.
- Fixed some commands outputting `commands.generic.permission` instead of the proper message when running commands that the sender doesn't have permission to use.
- Worlds with unknown generator types will now refuse to load instead of getting incorrect terrain generation ruining them.
- `TextFormat::tokenize()` no longer corrupts Unicode sequences.
- `TextFormat::clean()` now removes non-printable Unicode code points in the private-use area.
- Running two servers in the same data directory is no longer allowed and will gracefully halt instead of corrupting your data.
- Sign text length is now soft-capped at 1000 characters.

# 3.7.3
- World save timings now include saves that are triggered by chunk unloading.
- Fixed several network denial-of-service bugs.
- A warning is now emitted when the `ChunkUtils` extension is not loaded.
- Moved version constants to a separate `VersionInfo` file for easier parsing and handling.

**For Minecraft: Bedrock Edition 1.11.0**

### Note
Plugins compatible with any previous 3.x.y version will also run on these releases and do not need API bumps. Plugin developers should **only** update their required API to this version if you need the changes in this build.

This changelog **does not account for protocol changes**. If your plugin uses the protocol, you're not shielded by API change constraints.

# 3.8.0
- Compatibility with Minecraft: Bedrock Edition 1.11.0
- Removed compatibility with 1.10.0

# 3.8.1
- Fixed furnace smelting recipes not working.
- Reduced legacy hacks dealing with `BatchPacket` to fix possible ID collisions.
- Reduced release phar size by minifying JSON data blobs.
- Moved some MCPE-specific JSON blobs to submodule.

# 3.8.2
- Fixed --enable-ansi and --disable-ansi not being respected on threads.
- Fixed a crash that could occur when decoding `AvailableCommandsPacket`.
- Fixed a crash when loading worlds with entities with missing `Motion` NBT tag.
- Fixed a crash when world time overflows signed int64 max.
- Fixed world generators and providers being registered too late (this was causing plugin issues).
- Updated RakLib version to get a security fix.
- Fixed errors when custom clients fill the wrong information in `ResourcePackClientResponsePacket`.
- Fixed `setImmobile()` getting overridden directly after `PlayerJoinEvent`.
- Fixed air being breakable by creative players.
- Fixed performance loss caused by bugs in the preprocessor.

# 3.8.3
- Fixed infinite recursion when using `Entity->close()` during `EntityDespawnEvent`.
- Fixed crash reports caused by folder plugins being reported to the crash archive.
- Fixed spawning entities on unloaded chunks during spawn sequence (possible client crash cause).
- Fixed `/time query` output message.
- Fixed `Server->hasOfflinePlayerData()` being case-sensitive.
- Improved error messages for skin validation in some places.
- Fixed classic stonecutter hardness.
- Fixed iron trapdoors being considered a valid furnace fuel.
- Fixed apple dropping from leaves happening less frequently than intended.
- Fixed tall plants like sunflower being replaceable by the top half.

# 3.8.4
- Plugin load order is now randomised to remove the ability to implicitly depend on filesystem-specific ordering.
- Packet logging in debug messages now uses base64 instead of hex (uses less space).
- Array and string size are now shown in error stack trace logs.
- Stack traces now render a maximum of 80 characters when making string parameters printable.
- Improved documentation for some transaction classes.
- Action order in inventory transactions is now randomised to prevent dependencies on any accidental or client-dependent ordering. Since the transaction system is specifically designed to avoid depending on order, this does not affect any core functionality.

# 3.8.5
- Moved preprocessor to build/ directory.
- Added documentation for `Server->getPlayer()`, `Server->getPlayerExact()` and `Server->matchPlayer()`.
- `server.lock` now contains the PID of the currently-running server.
- PID of server is now reported in the error message when attempting to run two servers from the same data directory at once.
- Fixed sluggish playercount updating on MOTD.
- Added new MultiRecipe UUIDs.
- Added an extra field to `StartGamePacket` to resolve minor incompatibility issues on different 1.11.x patch versions.

# 3.8.6
- Fixed `Entity->isNameTagAlwaysVisible()` not working.
- Log messages are now cleaned of invalid UTF-8 sequences before emitting them.
- Fixed negative integers being considered as strings for world seeds.
- Fixed out-of-bounds access on invalid inventory data in player data saves.
- Fixed crash when custom liquids have flow decays which aren't factors of 4.
- Fixed `Entity->noDamageTicks` not working when the entity had no previous damage cause.

# 3.8.7
- Improved documentation of `Player->getDisplayName()` and `Player::isValidUserName()`.
- Fixed a bug in `SetScorePacket` decoding causing the entry list to always be empty.

**For Minecraft: Bedrock Edition 1.12.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.9.0
- Added support for Minecraft: Bedrock Edition 1.12.0
- Removed compatibility with 1.11.0

## Protocol
- The following classes in the `\pocketmine\network\mcpe\protocol` namespace have been renamed:
  - `AddEntityPacket` -> `AddActorPacket`
  - `AddItemEntityPacket` -> `AddItemActorPacket`
  - `AvailableEntityIdentifiersPacket` -> `AvailableActorIdentifiersPacket`
  - `BlockEntityDataPacket` -> `BlockActorDataPacket`
  - `EntityEventPacket` -> `ActorEventPacket`
  - `EntityFallPacket` -> `ActorFallPacket`
  - `EntityPickRequestPacket` -> `ActorPickRequestPacket`
  - `MoveEntityAbsolutePacket` -> `MoveActorAbsolutePacket`
  - `MoveEntityDeltaPacket` -> `MoveActorDeltaPacket`
  - `RemoveEntityPacket` -> `RemoveActorPacket`
  - `SetEntityDataPacket` -> `SetActorDataPacket`
  - `SetEntityLinkPacket` -> `SetActorLinkPacket`
  - `SetEntityMotionPacket` -> `SetActorMotionPacket`
  - `TakeItemEntityPacket` -> `TakeItemActorPacket`
- The following classes in the `\pocketmine\network\mcpe\protocol` namespace have been removed:
  - `FullChunkDataPacket`
- The following classes in the `\pocketmine\network\mcpe\protocol` namespace have been added:
  - `AddEntityPacket` (not to be confused with the old one)
  - `ClientCacheBlobStatusPacket`
  - `ClientCacheMissResponsePacket`
  - `ClientCacheStatusPacket`
  - `LevelChunkPacket`
  - `RemoveEntityPacket` (not to be confused with the old one)
  - `StructureTemplateDataExportRequestPacket`
  - `StructureTemplateDataExportResponsePacket`

# 3.9.1
- Fixed resource packs not working on 1.12 clients.
- Fixed some particles displaying incorrectly (some still don't render at all).
- Fixed `Entity->setFireTicks()` with a value of `0` setting the on-fire flag.
- Silenced a debug message which appeared every time a player right-clicked a block.
- Updated constants for `LevelSoundEventPacket`.

# 3.9.2
- Logger warnings for illegal player movements have been lowered to debug.
- TNT explosions now start from the center instead of the base. This fixes unexpected results when TNT is lit on top of obsidian.
- Fixed the `loadbefore` directive in `plugin.yml` sometimes being ignored.
- Fixed `Item->setCustomName()` with an empty string leaving behind an empty tag.
- Fixed incorrect positioning of bucket empty sound.
- Fixed some incorrect tag parsing in `/give` involving quoted numbers.

# 3.9.3
- Fixed a memory leak on async task removal in error conditions.
- Fixed scheduled block updates (for example liquid) triggering chunk reloading. This could cause a significant performance issue in some conditions.
- Fixed some minor cosmetic issues in documentation.

# 3.9.4
- Fixed a memory leak when scheduled updates were pending on a chunk being unloaded.
- Fixed plugin detection in crashdumps. Previously `src/pocketmine` anywhere in the path would cause the error to be considered a core crash, regardless of the preceding path.
- Fixed entity metadata types for 1.12. The SLOT type was removed and a COMPOUND_TAG type added. This change involves changes to internal API which may break plugins. **See the warning at the top of this changelog about API versioning.**
- Fixed random and base populator amounts of trees and tallgrass never being initialized. This bug had no obvious effect, but may have become a problem in future PHP versions.
- The following internal methods have been marked as `@deprecated` and documentation warnings added:
  - `Entity->getBlocksAround()`
  - `Entity->despawnFrom()`
  - `Entity->despawnFromAll()`
- Fixed plugin `softdepend` not influencing load order when a soft-depended plugin had an unresolved soft dependency of its own.
- Fixed endless falling of sand on top of fences.

# 3.9.5
- Fixed some issues with multiple consecutive commas inside quotes in form responses.
- Fixed server crash when the manifest json does not contain a json object in a resource pack.
- Ender pearls no longer collide with blocks that do not have any collision boxes.

# 3.9.6
- Updated Composer dependencies to their latest versions.
- Prevent clients repeating the resource pack sequence. This fixes error spam with bugged 1.12 clients.
- `Internet::simpleCurl()` now includes the PocketMine-MP version in the user-agent string.
- Spawn protection is now disabled by default in the setup wizard.
- Default difficulty is now NORMAL(2) instead of EASY(1).
- Fixed crashing on corrupted world manifest and unsupported world formats.
- Fixed `/transferserver` being usable without appropriate permissions.
- `RegionLoader->removeChunk()` now writes the region header as appropriate.
- Fixed performance issue when loading large regions (bug in header validation).
- Fixed skin geometry being removed when the JSON contained comments.
- Added new constants to `EventPacket`.
- Added encode/decode for `StructureTemplateDataExportRequestPacket` and `StructureTemplateDataExportResponsePacket`.
- Fixed broken type asserts in `LevelChunkPacket::withCache()` and `ClientCacheMissResponsePacket::create()`.
- `types\CommandParameter` field `byte1` has been renamed to `flags`.
- Cleaned up public interface of `AvailableCommandsPacket`, removing fields which exposed details of the encoding scheme.
- Improved documentation for the following API methods:
  - `pocketmine\item\Item`:
    - `addCreativeItem()`
    - `removeCreativeItem()`
    - `clearCreativeItems()`
  - `pocketmine\level\Explosion`:
    - `explodeA()`
    - `explodeB()`
- Fixed various cosmetic documentation inconsistencies in the core and dependencies.

# 3.9.7
- Fixed a crash that could occur during timezone detection.
- Squid no longer spin around constantly in enclosed spaces. Their performance impact is reduced.
- Cleaned up the bootstrap file.

# 3.9.8
- Added [PHPStan](https://github.com/phpstan/phpstan) configuration. PHPStan is now used on CI for automated QA, which should improve stability and quality going forward.
- The following constants are now autoloaded when loading the Composer autoloader:
  - `pocketmine\NAME`
  - `pocketmine\BASE_VERSION`
  - `pocketmine\IS_DEVELOPMENT_BUILD`
  - `pocketmine\BUILD_NUMBER`
  - `INT32_MIN`
  - `INT32_MAX`
  - `INT32_MASK`
- Fixed memory leaks and crashes caused by plugin use of `Player->showPlayer()` and `Entity->spawnTo()`.
- Fixed crashes that could occur when tile classes were overridden with classes incompatible with the originals.
- Fixed improper handling of non-Compound root NBT tags on network itemstack decoding.
- Fixed paintings dropping multiple items when destroyed by block updates.
- Fixed `var_dump()` not showing private and protected properties of `DataPacket` subclasses.
- Fixed overloads with zero arguments being missing when decoding `AvailableCommandsPacket`.
- `CraftingDataPacket` now retains the `cleanRecipes` field when decoding.
- Fixed `Block->getMetadata()` returning null (non-iterable).
- `PlayerChatEvent` documentation has been updated to specify that `CommandSender` recipients are accepted. This behaviour was already present in previous versions, but incorrectly documented.
- Fixed various issues with PHPDoc comments reported by PHPStan.
- Fixed various minor code nits reported by PHPStan.

**For Minecraft: Bedrock Edition 1.13.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.10.0
- Added support for Minecraft: Bedrock Edition 1.13.0
- Removed compatibility with 1.12.0

## Note about skins
PocketMine-MP **does not support skins made in the Charactor Creator** (known as Persona skins), due to technical changes which would require premature backwards compatibility breaks. The dev team has decided not to support Persona yet.
These skins will be **replaced with a random solid-colour skin. This is not a bug.**
Skins chosen from the Classic tab (classic skins) will continue to work as normal.

# 3.10.1
- Fixed custom plugin-created skins being invisible when no geometry name was specified.
- Updated RakLib to 0.12.6 to fix security bugs.

**For Minecraft: Bedrock Edition 1.14.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.11.0
- Added support for Minecraft: Bedrock Edition 1.14.0
- Removed compatibility with 1.13.0

# 3.11.1
- Fixed blocks with incorrect properties when placed or interacted with.

# 3.11.2
## Core
- PHPStan 0.12.3 with level 5 is now used for automated static analysis.
- Fixed a possible crash when plugins override the `EnderChest` tile class with something incompatible.
- Fixed disconnected players being considered as never played.
- Fixed enchantments with IDs outside the range 0-255 in item NBT crashing the server.
- Fixed particles rendering incorrectly.
- Timings handlers are no longer able to underflow; they now throw exceptions when attempting to be stopped more times than they were started.
- Fixed explosion rays getting stuck in empty subchunks (possible incorrect behaviour in large caves).
- Fixed bad tile/entity NBT data being propagated from world providers in some cases.
- Fixed a possible crash when detecting timezone on CentOS.
- Fixed many cases of incorrectly documented types in the API found by PHPStan.
- Generation tasks no longer assume that generator instances stored in TLS are always valid, fixing a possible crash.

## Protocol
- Fixed skin animation image corruption in LoginPacket handling caused by incorrect data handling.
- Fixed skin animation extra data not being decoded from LoginPacket.
- `SkinImage` now throws `InvalidArgumentException` if it receives an unexpected amount of bytes for the given image heigh/width.
- Fixed broken code in `PlayerAuthInputPacket::create()`.
- Removed some dead constants from `NetworkInventoryAction`.

# 3.11.3
- Fixed some PHPStan false-positives in release builds.
- Git hash is now correctly detected for source builds when the working directory is not the repository root.
- Added a specialized build script `build/server-phar.php` for creating server phars.
- Fixed timings crashing the server.
- Timings chains now work correctly.
- Fixed some minor timing errors in chained timings.
- Forcing resource packs no longer causes removal of client-sided resource packs. If this behaviour is desired, use a vanilla resource pack at the bottom of your resource stack (as was necessary for non-forced packs).
- Added documentation to the API to clarify that effect durations are in ticks.

# 3.11.4
- Fixed performance issue in leaf decay.
- Fixed entity position desync when entities stop moving, but still have velocity on the client.
- Fixed a crash when encountering truncated `level.dat` files in LevelDB worlds.
- Core code is now analyzed using PHPStan level 6.
- The core constants `pocketmine\PATH` and `pocketmine\RESOURCE_PATH` are now unconditionally available when including the Composer autoloader.
- Populate type information in lots of places where it was previously missing; this will improve the quality of static analysis for plugins.
- `MainLogger::logException()` now logs previous exceptions recursively.
- `MainLogger::logException()` now always logs exceptions as `critical`.

# 3.11.5
- PHPStan and PHPUnit are now managed as Composer dev dependencies.
- Core code is now analyzed using PHPStan level 6 (full, including iterable types checking).
- Improved type information available to PHPStan in many areas.
- Mass-removal of useless PHPDoc.
- Fixed incorrect documentation of `Internet::getURL()`, `Internet::postURL()` and `Internet::simpleCurl()`.
- Fixed crash on use of case-mismatched recursive command aliases.
- Basic build instructions are now provided in `BUILDING.md`.
- `build/server-phar.php` now uses GZIP compression on created phars, providing a 75% size reduction.
- `ClientboundMapItemDataPacket` now uses `MapDecoration` objects for decorations instead of associative arrays.
- Updated Composer dependencies to get bug fixes in `pocketmine/nbt` and other libraries.
- Packages `pocketmine/classloader` and `pocketmine/log` are now required; these provide classes previously part of `pocketmine/spl`. This change has no effect on API compatibility.

# 3.11.6
- Core code, tests and build scripts are now analyzed using `phpstan-strict-rules` and `phpstan-phpunit` rules.
- Added more PHPStan-specific type annotations to improve static analysis.
- Fixed more incorrect PHPDoc types.
- Added a workaround for player movement not working since 1.14.30.
- Fixed lava and water buckets being edible since 1.13.
- `AutoUpdater` is now created before any plugins are loaded.
- Fixed trees not generating below y=2 in custom generators.
- Fixed crash when opening a chest improperly unpaired from its pair (destroyed, setBlock(), unloaded, etc.).
- `ThreadManager` is now lazily initialized.
- Removed raw NBT storage from `Item` internals. The following methods are now deprecated:
  - `Item::setCompoundTag()`

# 3.11.7
- Build system: Fixed crash reports of Jenkins builds being rejected by the crash archive as invalid.
- Introduced a new dependency on `pocketmine/log-pthreads`, which contains classes separated from `pocketmine/log`.
- Fixed minimum composer stability preventing any newer version of `pocketmine/pocketmine-mp` being installed than 3.3.4 by replacing `daverandom/callback-validator` with [`pocketmine/callback-validator`](https://github.com/pmmp/CallbackValidator).
- Fixed every player seeing eating particles when any player eats.
- Fixed setting held item not working during `BlockBreakEvent`, `PlayerInteractEvent` and `EntityDamageEvent`.
- Fixed some incorrect documented types in `PlayerQuitEvent` reported by PHPStan.
- Fixed documentation of `Item->pop()` return value.
- Fixed server crash on encountering corrupted compressed data stored in region files.
- Protocol: Split screen header is now properly accounted for during decoding. Note that split screen is still not supported natively, but their packets can be decoded properly now.
- Protocol: Fixed wrong order of fields in `UpdateTradePacket`.
- Protocol: Fixed loss of `fullSkinId` when decoding network skins.
- Fixed RCON not being able to bind to port after a fast server restart.

**For Minecraft: Bedrock Edition 1.14.60**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.12.0
- Added support for Minecraft: Bedrock Edition 1.14.60
- Removed compatibility with 1.14.0-1.14.30

# 3.12.1
- Fixed parsing of single-line doc comments for event handlers, e.g. `/** @ignoreCancelled */` should now work correctly.
- The server will no longer crash on failure to load `level.dat` contents, but will gracefully shutdown instead without producing a crashdump.
- Fixed some bugs in login verification that could cause undefined behaviour.
- Fixed item-use behaviour when sneaking - sneaking and clicking a block with an empty hand, and sneaking and using an item, both now follow vanilla behaviour.
- `start.sh` will now work on platforms where `/bin/bash` is not available, as long as `/usr/bin/env` knows where bash is.

# 3.12.2
- Fixed permission default timings not being reported in timings reports (they were never stopped, only started).
- Resource packs with a directory tree like `pack.zip/MyPack/manifest.json` are now supported. Note that the manifest closest to the root will be used.
- Fixed `SkinImage` height and width being inverted at the protocol layer.
- Fixed blocks being able to be placed inside the spawn protection radius by clicking the side of a block outside the radius.
- Fixed server crash when `network.compression-level` is overridden by a CLI parameter.
- Fixed moving entities spawning themselves to players registered on chunks when the players haven't received the chunk yet.
- Cocoa pods now drop cocoa beans when broken instead of the block itself.

# 3.12.3
- Core code is now analyzed using PHPStan level 8 (using baselines). While not all the code is level 8 compliant, this does mean that new code will be held to a higher standard, ensuring quality going forwards.
- Players no longer burn when melee-attacked by other players. (vanilla parity)
- Arrows shot by burning players are no longer on fire. (vanilla parity)
- Fixed a crash that could occur with plugins on Unix filesystems that had backslashes in their names.
- Cleaned up a whole bunch of unknowns in the protocol layer. Many new constants have been added.
- Fixed player walking sounds.
- Default generation queue size has been raised to 32 (previously 8). The previous default was selected in a time when PHP was much less performant than it is today, and in today's world it just needlessly slows things down.
- Double plants are now burned away by fire.
- Snow layers can now be stacked. (vanilla parity)
- Resource pack sending chunk size has been reduced to 128 KB (previously 1 MB). This change was made after analyzing the effects that larger pack chunk sizes have on RakNet. Given the technical evidence, a smaller size, while slightly less bandwidth-efficient, should be more manageable for RakNet due to lower split reassembly overhead and reduced memory pressure.
- Fixed "switching" (an exploit often complained about by PvP players). Now, the previous damage is subtracted from current damage when an entity is attacked while on cooldown. This means that attacking with a wooden sword and then diamond sword while attack cooldown is active will only deal as much damage as the diamond sword would have, instead of the combined total. This can be controlled using the `EntityDamageEvent::MODIFIER_PREVIOUS_DAMAGE_COOLDOWN` modifier. (vanilla parity)
- Fixed projectiles knocking mobs back in unexpected directions on collision.
- Fixed inventories not being synchronized on failed inventory transactions.
- Vector3s decoded from packets are no longer rounded directly. Instead, the player movement handler takes responsibility for rounding the coordinates to prevent anti cheat doing something it's not supposed to.
- `mobflame` particle can now be spawned using the `/particle` command.
- Fixed several internal errors that could occur while modifying writable books.
- Fixed swapping writable book pages not working in some cases.
- `WritableBook->getPageText()` no longer throws an exception when the page doesn't exist, but returns null (as it was originally intended to).

# 3.12.4
- Fixed absorption hearts not being consumed.

# 3.12.5
- Fixed broken attack cooldowns.

# 3.12.6
- Fixed entities not getting movement updates after teleports.
- Fixed slow flight in spectator mode when starting from the ground and after teleportation.
- Errors communicating with the crash archive on automatic crash submission are now logged.

**For Minecraft: Bedrock Edition 1.14.60**

This is a feature release, containing various minor API additions, deprecations and a few minor features.

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.13.0
## Core
- PHP 7.3.0 or newer is now required.
- Player movement processing has been revamped. It's now more tolerant of network lag and doesn't have as many problems with falling.

## User Interface
- `/time` now supports additional aliases `noon`, `sunset`, `midnight` and `sunrise`.
- Removed warnings when a plugin registers a handler for a deprecated event. Since this warning is developer-focused, and too specific to be useful, it just caused annoyance and confusion to users who didn't know what it meant.

## API
### General
- It's now possible to require a specific operating system using the `os` directive in `plugin.yml`. More information about this directive can be found in the [developer documentation](https://github.com/pmmp/DeveloperDocs).

### Player
- `Player->resetItemCooldown()` now accepts a second parameter, allowing plugins to provide a custom duration.
- The following methods have been deprecated and have recommended replacements:
  - `Player->addTitle()` -> `Player->sendTitle()`
  - `Player->addSubTitle()` -> `Player->sendSubTitle()`
  - `Player->addActionBarMessage()` -> `Player->sendActionBarMessage()`

### Event
- The following methods have been deprecated:
  - `EntityDespawnEvent->getType()`
  - `EntityDespawnEvent->getPosition()`
  - `EntityDespawnEvent->isCreature()`
  - `EntityDespawnEvent->isHuman()`
  - `EntityDespawnEvent->isProjectile()`
  - `EntityDespawnEvent->isVehicle()`
  - `EntityDespawnEvent->isItem()`
  - `EntitySpawnEvent->getType()`
  - `EntitySpawnEvent->getPosition()`
  - `EntitySpawnEvent->isCreature()`
  - `EntitySpawnEvent->isHuman()`
  - `EntitySpawnEvent->isProjectile()`
  - `EntitySpawnEvent->isVehicle()`
  - `EntitySpawnEvent->isItem()`
- Added the following API methods:
  - `EntityDeathEvent->getXpDropAmount()`
  - `EntityDeathEvent->setXpDropAmount()`
- `PlayerDeathEvent::__construct()` now accepts a fourth (optional) parameter `int $xp`.
- `EntityDeathEvent::__construct()` now accepts a third (optional) parameter `int $xp`.

### Inventory
- The following classes have been deprecated:
  - `Recipe`
- The following methods have been deprecated:
  - `CraftingManager->registerRecipe()`
  - `Recipe->registerToCraftingManager()` (and all its implementations)

### Item
- New `Enchantment` type ID constants have been added.
- `ItemFactory::fromStringSingle()` has been added. This works exactly the same as `ItemFactory::fromString()`, but it has a return type of `Item` instead of `Item|Item[]` (more static analysis friendly).

### Level
- Added the following API methods:
  - `Position->getLevelNonNull()`: this is the same as `Position->getLevel()`, but throws an `AssumptionFailedError` if the level is null or invalid (more static analysis friendly).
  - `Level->getTimeOfDay()`
- The following constants have been changed:
  - `Level::TIME_DAY` now has a value of `1000`
  - `Level::TIME_NIGHT` now has a value of `13000`
- Added the following constants:
  - `Level::TIME_MIDNIGHT`
  - `Level::TIME_NOON`
- The following types of particles now accept optional `Color` parameters in the constructor:
  - `EnchantParticle`
  - `InstantEnchantParticle`

### Network
- Added the following API methods:
  - `RakLibInterface->setPacketLimit()`

### Scheduler
AsyncTask thread-local storage has been improved, making it simpler and easier to use.
- `AsyncTask->fetchLocal()` no longer deletes stored thread-local data. Instead, the storage behaves more like properties, and gets deleted when the AsyncTask object goes out of scope.
- `AsyncTask->peekLocal()` has been `@deprecated` (use `fetchLocal()` instead).
- Notices are no longer emitted if an async task doesn't fetch its locally stored data.
- The following methods have been deprecated:
  - `AsyncTask->getFromThreadStore()` (use its worker's corresponding method)
  - `AsyncTask->saveToThreadStore()` (use its worker's corresponding method)
  - `AsyncTask->removeFromThreadStore()` (use its worker's corresponding method)

### Utils
- The following functions have been deprecated and have recommended replacements:
  - `Utils::getMemoryUsage()` -> split into `Process::getMemoryUsage()` and `Process::getAdvancedMemoryUsage()` (not 1:1 replacement!!)
  - `Utils::getRealMemoryUsage()` -> `Process::getRealMemoryUsage()`
  - `Utils::getThreadCount()` -> `Process::getThreadCount()`
  - `Utils::kill()` -> `Process::kill()`
  - `Utils::execute()` -> `Process::execute()`
- Added the following constants:
  - `Utils::OS_WINDOWS`
  - `Utils::OS_IOS`
  - `Utils::OS_MACOS`
  - `Utils::OS_ANDROID`
  - `Utils::OS_LINUX`
  - `Utils::OS_BSD`
  - `Utils::OS_UNKNOWN`
- Added the following API methods:
  - `Config->getPath()`
  - `Utils::recursiveUnlink()`
  - `Terminal::write()`
  - `Terminal::writeLine()`

# 3.13.1
- Fixed issues with `server.lock` not being unlocked on some platforms. Now, the server explicitly releases it before exiting.
- `/timings` now sends a usage message when using an unknown subcommand. Previously, it would just give no output.
- `/whitelist` now sends a usage message when using an unknown subcommand. Previously, it would just give no output.
- The output from `/timings` is now broadcasted on the `pocketmine.broadcast.admin` broadcast channel for auditability, similarly to other operator commands.
- Fixed `ShapedRecipe` deprecation warning on PHP 7.4.
- Fixed some potential crashes with Bedrock worlds when chunk data is corrupted or missing.
- Fixed a bug in region handling that caused region loaders to overestimate the amount of space used in the file. This resulted in an up to 4 MB growth of the file size every time the region was reloaded after writing a chunk.
- Region handlers now try to reuse free space in region files before putting the chunk at the end of the file. Previously, space was only reused if the new version of the chunk was <= the size of the old. This fixes endless growth of region files.
- Regions now never directly overwrite old copies of chunks when saving; instead they try to find an alternative location (preferring unused space within the file first). This avoids chunk corruption on power failure (the old copy of the chunk won't be damaged, so a rollback might occur instead), and as happy side effect, causes oversized regions to gradually shrink towards their most packed state over time, saving disk space.
- Regions now have a hard size cap at 64 GB. This is because the header pointers will overflow beyond 64 GB (besides, a normal region shouldn't be this big anyway).
- Fixed a crash that could occur when reading a too-short region header.
- `VerifyLoginTask` now only copies JWTs to verify instead of the entire login packet. This reduces the amount of data copied between threads, improving performance.
- Added a fast-fail check to `VerifyLoginTask` by checking the JWT header's `x5u` against the expected public key.
- `Skin->validate()` now throws `InvalidSkinException` instead of `\InvalidArgumentException`.
- A debug message is now logged when a player is kicked for having an invalid skin, giving a brief line of detail why.
- Fixed players not being kicked for having an invalid `resourcePatch`.
- Fixed block meta value of cake being preserved when using pick-block.
- Fixed explosions not fully destroying multi-block objects like beds and doors.

**For Minecraft: Bedrock Edition 1.16.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.14.0
- Added support for Minecraft: Bedrock Edition 1.16.0.
- Removed compatibility with 1.14.60.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist

# 3.14.1
- All skins are now trusted, bypassing the client-side trusted skin setting. Note that this means that NSFW skin filtering will **not** apply.
- Fixed projectile motion being altered by ladders.
- Fixed client-sided crashes when pressing E repeatedly very quickly on a high-latency connection.
- `/plugins`, `/whitelist list`, `/banlist` and `/list` now show output in alphabetical order.
- Some `pocketmine\event` APIs which accept arrays now have more robust type checking, fixing type errors caused by plugin input occurring in core code.
- `Attribute::getAttributeByName()` is now aware of the `minecraft:lava_movement` attribute.

# 3.14.2
- Exception stack traces are now logged as CRITICAL. It's hoped that users will recognize that they are just as important as the error message and not leave them out when asking for help with errors on Discord.
- `TaskScheduler` no longer accepts tasks that already have a handler. This fixes undefined behaviour which occurs when scheduling the same task instance twice, but it does break plugins such as **MyPlot** which unintentionally used this buggy behaviour.
- Players will now correctly receive the needed number of spawn chunks if they are teleported between `PlayerLoginEvent` and `PlayerJoinEvent`. This fixes a bug that could occur when teleporting players in delayed tasks between login and join.
- `PlayerRespawnEvent->setRespawnPosition()` now throws an exception if the provided `Position` has an invalid world associated with it (null or unloaded).
- Fixed a crash that occurred when stats reporting was enabled.

# 3.14.3
- Fixed deprecation error when running `/whitelist list` on PHP 7.4.
- Fixed podzol breaking animation being incorrect (incorrect hardness).
- `Entity::getSaveId()` now reports the class name in the message thrown for unregistered entities.
- Fixed `CraftingManager->validate()` producing different results when called multiple times for the same transaction.
- Fixed various issues with batch-crafting items using the recipe book and shift-clicking.
- `tests/plugins/PocketMine-DevTools` submodule has been renamed to `tests/plugins/DevTools`.

**For Minecraft: Bedrock Edition 1.16.20**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.15.0
- Added support for Minecraft: Bedrock Edition 1.16.20.
- Removed compatibility with 1.16.0.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist

# 3.15.1
- Fixed various PHP 7.4 compatibility issues in Composer dependencies (primarily callback-validator).
- Fixed LevelDB worlds with corrupted `level.dat` crashing the server instead of failing gracefully.
- Fixed error spam when using strings for layers in flatworld presets (`e.g. bedrock,3xdirt,grass`).
- Fixed blocks not getting updated properly on explosions.
- Fixed `BlockGrowEvent` not being called when sugarcane grows.
- Potato crops now drop poisonous potatoes when harvested.
- Fixed the wrong number of potatoes being dropped when harvesting potato crops.
- Players no longer get pullbacks when sprinting on slabs, stairs and various other blocks when `player.anti-cheat.allow-movement-cheats` is set to `false`. (This bug has been around for over 5 years, so many of you will be used to its existence.)
- Fixed entity collision box calculation not taking clip distance into account.
- Entities now step up the correct height of the target block, instead of jumping into the air 0.6 blocks and falling back down.

# 3.15.2
- Fixed issues with preloading `SubChunk`.
- `/gc` and automatic garbage collection will now release unused heap blocks back to the OS. Previously, the PHP process might hold onto these blocks indefinitely even when not used, causing elevated real memory usage.
- Added some documentation to `FurnaceBurnEvent`.

# 3.15.3
- Fixed fall damage accumulation over continuous knockbacks (e.g. combo attacks in PvP).
- Fixed a bug in `Human->addXp()` that would cause a crash when saving player data.
- `Human->addXp()` will no longer modify the target's total XP if `PlayerExperienceChangeEvent` was cancelled.
- `AsyncPool->getTaskQueueSizes()` has been added to allow external detection of async pool overload. This is planned to be implemented as a core feature in the future, but it hasn't been done yet.
- `BaseInventory->canAddItem()` behaviour now matches `addItem()` by considering the max stack size of the given item.
- Fixed a bug in generator options handling for worlds loaded via `pocketmine.yml`. This fix has the following side effects:
  - It's now possible to provide generator options as an `options` key when loading a world via `pocketmine.yml`.
  - If generator options are not provided, the options from `server.properties` will be used, instead of using an empty preset. (It's not clear whether this is desired behaviour, but it was clearly intended, since there is code to do this which was broken until this release. As such, this behaviour is subject to change in the future.)
- Fixed a bug in region-based world loading where some files without filename extensions and names containing a region filename extension (e.g a file named `amca` in a McRegion world) would cause the world not to load. These files are now ignored.
- Default network compression level has been lowered to 6, due to level 7 being 25% more expensive for only a marginal improvement in bandwidth.
- Fixed a performance issue with chunk requesting when players trigger chunk generation on first join.
- Setup wizard will now always show IP information, even if the user chose to skip the setup wizard when prompted. (This doesn't affect `--no-wizard` in any way.)
- `Maximum memory (system)` is no longer reported in `/status` due to having a misleading output (it was the same as the current memory usage).
- The `Player Chunk Send` timer on timings reports now actually reports measurements of chunk sending, not chunk loading.
- A new parent timer `World Load` has been added to timings reports, which aggregates timings from `syncChunkLoad` and subtimings from all worlds.

# 3.15.4
- Fixed a bug in the inventory transaction system that caused the server to freeze under some circumstances.

**For Minecraft: Bedrock Edition 1.16.100**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.16.0
- Added support for Minecraft: Bedrock Edition 1.16.100.
- Removed compatibility with earlier versions.
- Added new custom composer commands `make-server` and `make-devtools` to ease setting up a development environment and building the server.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist

# 3.16.1
- Fixed incorrect encoding of skins in the protocol.
- `/version` no longer crashes when a plugin provides `string[]` for the `author` field in `plugin.yml`.
- `author` in `plugin.yml` now accepts arrays, just like `authors`.
- Fixed `HellBiome` never being registered.

**For Minecraft: Bedrock Edition 1.16.200**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.17.0
- Added support for Minecraft: Bedrock Edition 1.16.200.
- Removed compatibility with earlier versions.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist

# 3.17.1
- Fixed some instances of plugin-caused crashes not being detected (eval()'d code, custom plugin paths).
- Server uptime is now included in crash reports.
- Hoes now take damage when used to break sponges.
- Using lava as fuel in a furnace now leaves behind an empty bucket.

# 3.17.2
- Fixed region header corruption when chunks with larger-than-expected lengths are found. These chunks are now treated as corrupted, instead of automatically attempting to salvage them (which usually fails anyway).
- `RegionLoader->removeChunk()` now allows the space used by the removed chunk to be reused by future region saves.
- Extracted `Living->applyConsumptionResults()` from `Living->consumeObject()` (preparation for a future bug fix).

# 3.17.3
- Improved performance of chunk loading in Region-based worlds.
- Improved performance of region header validation in Region-based worlds (indirect improvement to chunk loading performance).
- Fixed some PHP 8.0 language-level compatibility issues.
- Source installations will now exit with an error when Composer dependencies are not in sync with the current Git revision. Now, it's required to run `composer install` after every git pull to make sure the correct dependency versions are installed.

# 3.17.4
- Removed `readline` support. This hasn't been maintained for many years, never worked correctly, and isn't thread-safe in any case.
- Fixed false-positives of region corruption in Region-based worlds (outdated file stat cache).
- Fixed more deprecation warnings on PHP 8.0 (optional parameter before required).
- `CraftItemEvent->getInputs()` now returns a list starting at offset 0, instead of random offsets. (Note that the contents still won't be ordered.)
- `CraftItemEvent->getOutputs()` now returns a list starting at offset 0, instead of random offsets. (Note that the contents still won't be ordered.)
- Fixed a bug that broke synchronized building, bridging, towering and more.
- Objects in memory dumps no longer show inherited properties multiple times.

# 3.17.5
- Reduced CPU wastage by the logger thread.
- Fixed LevelDB deprecation errors on PHP 8.0.
- Added some protocol changes for 1.16.200 which were previously overlooked.
- Player XUIDs are now tracked. If a player's XUID does not match the previously recorded XUID when they next join the server, they will be kicked. This can be disabled by the `player.verify-xuid` setting in `pocketmine.yml`.
- `BUILDING.md` now has a note about `build/server-phar.php`'s compression bug (a bug in PHP).

# 3.17.6
- Fixed core race conditions that could have led to server freezes (race conditions in pmmp/Snooze).
- The log message about Xbox Live authentication being enabled has been reduced to INFO, and the tip on how to turn it off removed (disabling it should usually only be done by power users anyway).
- Fixed `PlayerMoveEvent->getFrom()` returning incorrect results for players who experienced movement reversions.
- Fixed a bug in `ResourcePackClientResponsePacket` decoding that caused unexpected results when decoding the packet twice.
- XUID verification now compares XUIDs against players who are already on the server to detect mismatches to avoid unnecessary loading of playerdata.
- Fixed an inventory duplication bug which could occur when the same player joined with two devices at the same time.
- Fixed cursor item not being synced on inventory transaction rollbacks.
- Fixed items with TAG_Float in their NBT not being able to be moved around in the inventory.

# 3.17.7
- Fixed crash caused by preprocessor in 3.17.6.

**For Minecraft: Bedrock Edition 1.16.210**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.18.0
- Added support for Minecraft: Bedrock Edition 1.16.210.
- Removed compatibility with earlier versions.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist
- Items can't be removed from item frames in Survival mode

# 3.18.1
- UPnP is now supported on all platforms instead of just Windows. Note that it's still experimental. Please file issues for any bugs that you find.
- Fixed server joining when default game mode is set to Spectator mode.
- Fixed items not being able to be removed from item frames in Survival mode.
- Fixed field order in ClientCacheBlobStatusPacket (hits and misses were inverted).
- Fixed a deadlock that could occur when MainLogger->syncFlushBuffer() was used (usually only used during exception logging).
- Updated constants for various things in the protocol.

# 3.18.2
- Fixed `InventoryCloseEvent` not being called on server-initiated inventory closures.
- `PlayerToggleFlightEvent` may now be pre-cancelled if the player attempted to enable flight when flying was not allowed. This replaces the previous behaviour of kicking the player.
- Fixed being unable to change the item in hand from the inventory window when looking at an entity.

**For Minecraft: Bedrock Edition 1.16.220**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.19.0
- Added support for Minecraft: Bedrock Edition 1.16.220.
- Removed compatibility with earlier versions.

## Known issues (please don't open issues for these)
- Walls don't connect to each other
- Pumpkin and melon stems may not connect to their corresponding pumpkin/melon
- New blocks, items & mobs aren't implemented
- Nether doesn't exist

# 3.19.1
- Fixed some particles not working since 1.16.220.
- Fixed issues with creative inventory items appearing in the wrong places since 1.16.220.
- `Item->removeEnchantment()` now removes the `ench` tag from item NBT when removing the only enchantment on an item.
- Fixed temporary memory leak of repeating tasks which cancelled themselves during their `onRun()` handler (they were pushed back onto the task queue even though cancelled, and only removed at their next attempted repeat).

# 3.19.2
- Signs can now only be edited by the player who placed them. They will become finalized if the chunk containing them is unloaded and reloaded, or if the creating player quits the server.

# 3.19.3
- Fixed `Worker->quit()` returning without stopping the thread.
- Added some protocol constants in `SetDisplayObjectivePacket`.
- Fixed possible client crash caused by `CraftingDataPacket`.

**For Minecraft: Bedrock Edition 1.17.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.20.0
- Added support for Minecraft: Bedrock Edition 1.17.0
- Removed compatibility with earlier versions.

**For Minecraft: Bedrock Edition 1.17.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.21.0
- PHP 7.4 is now required as a minimum.
- A workaround for player movement added in 1.14.30 has been removed.

# 3.21.1
- Fixed so-called 'pot lag' - a bug that could occur when using items while rapidly switching hotbar slots.
- Plugins in crashdumps are now ordered alphabetically for easier reading. 

**For Minecraft: Bedrock Edition 1.17.10**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.22.0
- Added support for Minecraft: Bedrock Edition 1.17.10.
- Removed compatibility with earlier versions.

# 3.22.1
- Added a giant yellow startup warning if using OPcache JIT on PHP 8.0. JIT is currently considered highly unstable and not recommended for production use.
- When using a bad PHP binary, the bootstrap will now report the used `php.ini` path. This can be useful for debugging issues with extension loading when the wrong `php.ini` file is loaded for some reason.
- Fixed `start.cmd` causing the wrong `php.ini` to be loaded on Windows when a global PHP installation is used.
- A debug message is now logged containing expected vs. actual XUID of players when an XUID mismatch is detected.
- Improved the documentation for `Player->getUniqueId()`.
- Fixed a mistake in the documentation of `PlayerAuthInputFlags`.
- Fixed incorrect encoding of `NpcDialoguePacket`.

# 3.22.2
- PHP 8.0 is now the primary supported version. PHP 7.4 is still supported for now, but it will be dropped in the coming weeks. It's recommended to start testing your servers on 8.0 now so you're ready.
- Fixed items in the crafting grid getting deleted on server-side disconnect or session timeout.
- A warning is now logged on startup if a debug build of PHP is used to run the server (because it has a significant performance impact).
- GitHub Actions is now used to build new releases, instead of Jenkins. You can see build logs [here](https://github.com/pmmp/PocketMine-MP/actions/workflows/draft-release.yml).

# 3.22.3
- Fixed a bug in the release build of 3.22.2 which caused the crash archive to reject all crashdumps.
- Fixed possible server crash during player spawning.

# 3.22.4
- Fixed a bug which broke the build of 3.22.3.

# 3.22.5
- Added a workaround for polyfilled solid-colour Persona skin replacements turning into a corrupted mess (caused by https://bugs.mojang.com/browse/MCPE-130275).

**For Minecraft: Bedrock Edition 1.17.30**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.23.0
- Added support for Minecraft: Bedrock Edition 1.17.30.
- Removed compatibility with earlier versions.

# 3.23.1
- Fixed broken build of 3.23.0.

**For Minecraft: Bedrock Edition 1.17.30**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.24.0
- PHP 8.0 is now required as a minimum.
- Fixed stats reporting checking the wrong `pocketmine.yml` property.
- Fixed `Projectile->move()` not respecting the given `dx`/`dy`/`dz` and using its own motion instead.

**For Minecraft: Bedrock Edition 1.17.40**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.25.0
- Added support for Minecraft: Bedrock Edition 1.17.40.
- Removed compatibility with earlier versions.

# 3.25.1
- Fixed autosave bug that caused unmodified chunks to be saved at least once (during the first autosave after they were loaded).
- `Entity->spawnTo()` now has an additional sanity check for matching worlds (might expose a few new errors in plugins).
- Fixed a missing field in `CraftRecipeAuto` item stack request type.

# 3.25.2
- Now analysed using level 9 on PHPStan 1.0.0.
- `ext-pthreads` v4.0.0 or newer is now required.
- Fixed crash in `Player->showPlayer()` when the target is not in the same world.
- `Human->setLifetimeTotalXp()` now limits the maximum value to 2^31.
- Fixed players, who died in hardcore mode and were unbanned, getting re-banned on next server join.

# 3.25.3
- Fixed crash when players try to pickup XP while already having max XP.
- Added a sanity check to `Human->setCurrentTotalXp()` to try and catch an elusive bug that's been appearing in the wild - please get in touch if you know how to reproduce it!

# 3.25.4
- Fixed a long-standing issue with `Player->removeWindow()` breaking inventory UIs on the client.

# 3.25.5
- Protocol: Fixed incorrect encoding in `StructureSettings`
- Fixed reading tags from non-docblock comments in script plugins.
- Build number is now defined in phar metadata instead of being patched into the source code directly.

# 3.25.6
- Fixed borked build number in release build of 3.25.5.

**For Minecraft: Bedrock Edition 1.18.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.26.0
- Added support for Minecraft: Bedrock Edition 1.18.0.
- Removed compatibility with earlier versions.

# 3.26.1
- Fixed a bug in chunk sending that caused double chests to not be paired, signs to be blank, and various other issues.

# 3.26.2
- Improved error messages shown by `start.cmd`, `start.sh` and `start.ps1` when the PHP binary was not found.
- The value of PHPRC is now shown when erroring out due to unsatisfied PHP requirements.
- Removed restriction on the range of valid channels for `auto-updater.channel` in `pocketmine.yml`.

# 3.26.3
- `PlayerExperienceChangeEvent->setNewProgress()` now performs range checks. This fixes the root of a very old and confusing crash bug which took several years to identify the cause of.
  - Note that the defective plugin(s) which caused this problem will still cause a server crash, but the plugin responsible will now get blamed correctly.

# 3.26.4
- Fixed skins appearing black when using RTX resource packs.
- Fixed chunks containing furnaces in old worlds (pre-2017) being discarded as corrupted.
  - This was caused by a strict corruption check detecting bad data created by a bug in PocketMine-MP that was fixed in 2017.

# 3.26.5
- Fixed several denial-of-service attack vectors related to writable book text length and encoding.
- Fixed several denial-of-service attack vectors related to skin data field lengths.

**For Minecraft: Bedrock Edition 1.18.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 3.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 3.27.0
- Introduced support for protocol encryption.
  - Encryption is enabled by default.
  - Fixes login replay attacks.
  - This may cause some performance degradation.
  - Encryption can be disabled by setting `network.enable-encryption` to `false` in `pocketmine.yml`. DO NOT do this unless you understand the risks involved.
- An obsoletion notice has been added to the console during server startup.

**For Minecraft: Bedrock Edition 1.18.0**

# 4.0.0
Released 1st December 2021.

This major version features substantial changes throughout the core, including significant API changes, new world format support, performance improvements and a network revamp.

Please also note that this changelog is provided on a best-effort basis, and it's possible some changes might not have been mentioned here.
If you find any omissions, please submit pull requests to add them.

* [Core](#core)
  + [General](#general)
  + [Dependency changes](#dependency-changes)
  + [Performance](#performance)
  + [Tools](#tools)
  + [Commands](#commands)
  + [Configuration](#configuration)
  + [World handling](#world-handling)
    - [Interface](#interface)
    - [Functional](#functional)
    - [Performance](#performance-1)
  + [Logging](#logging)
  + [Network](#network)
    - [Performance](#performance-2)
    - [Minecraft Bedrock packet encryption](#minecraft-bedrock-packet-encryption)
    - [Error handling](#error-handling)
    - [New packet handler system](#new-packet-handler-system)
  + [Plugin loading](#plugin-loading)
  + [Internals](#internals)
* [API](#api)
  + [General](#general-1)
  + [Changes to `plugin.yml`](#changes-to-pluginyml)
    - [Permission nesting](#permission-nesting)
    - [`src-namespace-prefix`](#src-namespace-prefix)
  + [Other changes](#other-changes)
  + [Block](#block)
  + [Command](#command)
  + [Entity](#entity)
    - [General](#general-2)
    - [Effect](#effect)
    - [Removal of runtime entity NBT](#removal-of-runtime-entity-nbt)
    - [Entity creation](#entity-creation)
    - [WIP removal of entity network metadata](#wip-removal-of-entity-network-metadata)
  + [Event](#event)
    - [Internal event system no longer depends on `Listener`s](#internal-event-system-no-longer-depends-on-listeners)
    - [Default cancelled handling behaviour has changed](#default-cancelled-handling-behaviour-has-changed)
    - [`PlayerPreLoginEvent` changes](#playerpreloginevent-changes)
    - [Other changes](#other-changes-1)
  + [Inventory](#inventory)
  + [Item](#item)
    - [General](#general-3)
    - [NBT handling](#nbt-handling)
    - [Enchantment](#enchantment)
  + [Lang](#lang)
  + [Network](#network-1)
  + [Permission](#permission)
  + [Player](#player)
  + [Plugin](#plugin)
  + [Promise](#promise)
  + [Scheduler](#scheduler)
    - [Thread-local storage for AsyncTasks](#thread-local-storage-for-asynctasks)
    - [Other AsyncTask changes](#other-asynctask-changes)
    - [Non-AsyncTask changes](#non-asynctask-changes)
  + [Server](#server)
  + [Level / World](#level--world)
    - [General](#general-4)
    - [Particles](#particles)
    - [Sounds](#sounds)
  + [Utils](#utils)
* [Gameplay](#gameplay)
  + [World loading](#world-loading)
  + [Blocks](#blocks)
  + [Items](#items)
  + [Inventory](#inventory-1)
  + [Misc](#misc)

<small><i><a href='http://ecotrust-canada.github.io/markdown-toc/'>Table of contents generated with markdown-toc</a></i></small>

## Core
### General
- Remote console (RCON) has been removed. The [RconServer](https://github.com/pmmp/RconServer) plugin is provided as a substitute.
- Spawn protection has been removed. The [BasicSpawnProtection](https://github.com/pmmp/BasicSpawnProtection) plugin is provided as a substitute.
- Player movement anti-cheat has been removed.
- GS4 Query no longer breaks when disabling RakLib.
- PreProcessor is removed from builds due to high maintenance cost and low benefit. Its usage is now discouraged.
- The title bar no longer displays heap memory usage numbers (nobody seemed to know that was what it was, anyway).
- `start.sh` no longer specifically mentions PHP 7 when erroring because of a missing PHP binary.
- The `--bootstrap` CLI option has been removed.
- Introduced support for connecting via IPv6:
  - PHP binary used must now always be built with IPv6 support, even if IPv6 is disabled. This is because RakNet may still send link-local IPv6 loopback addresses in connection packets even when only using IPv4.
  - Port `19133` is used for IPv6 by default so that Minecraft Bedrock can detect IPv6 servers on LAN.
  - GS4 Query is supported on both IPv4 and IPv6 according to `server.properties` settings.
  - New `server.properties` options `enable-ipv6`, `server-ipv6`, `server-portv6` have been added (see below).

### Dependency changes
- The `pocketmine_chunkutils` PHP extension has been dropped.
- IPv6 support in PHP is now mandatory.
- New PHP extensions are required by this version:
  - [crypto](https://github.com/bukka/php-crypto)
  - [chunkutils2](https://github.com/pmmp/ext-chunkutils2)
  - [gmp](https://www.php.net/manual/en/book.gmp.php)
  - [igbinary](https://github.com/igbinary/igbinary)
  - [leveldb](https://github.com/pmmp/php-leveldb) (must be built with [pmmp/leveldb](https://github.com/pmmp/leveldb/tree/mojang-compatible))
  - [morton](https://github.com/pmmp/ext-morton)
- The following Composer dependency versions have changed (**PLEASE READ, dependency API changes are not mentioned in this changelog!**):
  - `pocketmine/bedrock-protocol` has been added at [7.0.0](https://github.com/pmmp/BedrockProtocol/releases/tag/7.0.0+bedrock-1.18.0).
  - `pocketmine/classloader` has been updated from 0.1.0 to [0.2.0](https://github.com/pmmp/ClassLoader/releases/tag/0.2.0) (**significant API changes, new features**).
  - `pocketmine/color` has been added at [0.2.0](https://github.com/pmmp/Color/releases/tag/0.2.0).
  - `pocketmine/errorhandler` has been added at [0.3.0](https://github.com/pmmp/ErrorHandler/releases/tag/0.3.0).
  - `pocketmine/locale-data` has been added at [2.0.16](https://github.com/pmmp/Language/releases/tag/2.0.16).
  - `pocketmine/log` has been updated from 0.2.0 to [0.4.0](https://github.com/pmmp/Log/releases/tag/0.4.0) (**minor API changes**, see also [0.3.0](https://github.com/pmmp/Log/releases/tag/0.3.0)).
  - `pocketmine/nbt` has been updated from 0.2.18 to [0.3.0](https://github.com/pmmp/NBT/releases/tag/0.3.0) (**significant API changes**).
  - `pocketmine/raklib` has been updated from 0.12.7 to [0.14.2](https://github.com/pmmp/RakLib/releases/tag/0.14.2) (**significant API changes**, see also [0.13.0](https://github.com/pmmp/RakLib/releases/tag/0.13.0)).
  - `pocketmine/raklib-ipc` has been added at [0.1.0](https://github.com/pmmp/RakLibIpc/releases/tag/0.1.0) (components extracted from RakLib).
  - `pocketmine/snooze` has been updated from 0.1.0 to [0.3.0](https://github.com/pmmp/Snooze/releases/tag/0.3.0) (**minor API changes**, see also [0.2.0](https://github.com/pmmp/Snooze/releases/tag/0.2.0)).
  - `pocketmine/spl` has been dropped.
- Minecraft Bedrock protocol is now developed in a separate repository, [pmmp/BedrockProtocol](https://github.com/pmmp/BedrockProtocol).
  - It has significant changes compared to PM3. Please read its changelogs.
- The following submodules have been removed:
  - `resources/vanilla`: BedrockData is now included via Composer dependency [`pocketmine/bedrock-data`](https://packagist.org/packages/pocketmine/bedrock-data).
  - `resources/locale`: Language files are now included via Composer dependency [`pocketmine/locale-data`](https://packagist.org/packages/pocketmine/locale-data).
  - This means it's now possible to run a server from git sources without cloning submodules :)
  - All remaining submodules (DevTools, build/php) are non-essential for building and running a server.

### Performance
- `/op`, `/deop`, `/whitelist add` and `/whitelist remove` no longer cause player data to be loaded from disk for no reason.
- Timings now use high-resolution timers provided by `hrtime()` to collect more accurate performance metrics.
- Closures are now used for internal event handler calls. This provides a performance improvement of 10-20% over the 3.x system, which had to dynamically resolve callables for every event call.
- Improved startup performance when loading many plugins.
- See more in the [Worlds / Performance](#performance-2) and [Network / Performance](#performance-3) sections.

### Tools
Some new scripts have been added in the `tools/` directory of the repository. These scripts may use the PocketMine-MP core library, but are intended to be run standalone.

 - `convert-world.php`: allows converting a world to a new format without a running server
 - `compact-regions.php`: repacks files in legacy Region worlds to clean up wasted disk space
 - `generate-permission-doc.php`: generates a Markdown document of all core permissions (see [example](https://gist.github.com/dktapps/eed6d6a4571f01b676236bf9ff2779b2))
 - `simulate-chunk-selector.php`: generates a series of images to visualize the behaviour of the chunk sending algorithm; these images can then be stitched into video using a tool such as [ffmpeg](https://ffmpeg.org/)

### Commands
- The `/effect` command no longer supports numeric IDs - it's now required to use names.
- The `/enchant` command no longer supports numeric IDs - it's now required to use names.
- The `/give` command no longer permits giving items with invalid NBT (e.g. incorrect types). Previously, this was the cause of random server crashes when using items on PM3.
- The `/give` command now supports many new aliases like in Java, e.g. it's now possible to do `/give someone bonemeal` or `/give someone lapis_lazuli` instead of using legacy id:metadata.
- The `/help` command is now localized according to language set in `server.properties`.
- The `/reload` command has been removed.
- The `/setworldspawn` command now accepts relative coordinates when used as a player.
- The `/status` command no longer displays heap memory usage numbers.
- Added `/clear` command with functionality equivalent to that of vanilla Minecraft.
- The following commands' outputs are now localized according to the chosen language settings:
  - `/gc`
  - `/status`
  - `/op`
  - `/deop`
- Fixed use of commands without the proper permission sending a message `commands.generic.permission` instead of the proper message.
- Fixed commands not working in some cases after using some control sequences on the console.
- Fixed `/setworldspawn` setting incorrect positions based on player position when in negative coordinates.

### Configuration
- World presets can now be provided as a `preset` key in `pocketmine.yml`, instead of putting them in the `generator` key.
- The `worlds` config no longer supports attaching the generator settings to the `generator` key (use the `preset` key instead).
- Using an unknown generator in `server.properties` or `pocketmine.yml` will now cause a failure to generate the world.
- Using invalid/incorrect world generator options (presets) in `server.properties` or `pocketmine.yml` will now cause a failure to generate the world.
- The following new options have been added to `pocketmine.yml`:
  - `chunk-ticking.blocks-per-subchunk-per-tick` (default `3`): Increasing this value will increase the rate at which random block updates happen (e.g. grass growth).
  - `network.enable-encryption` (default `true`): Controls whether Minecraft network packets are encrypted or not.
- The following options have been removed from `pocketmine.yml`:
  - `chunk-ticking.light-updates`: Since lighting is needed for basic vanilla functionality to work, allowing this to be disabled without disabling chunk ticking made no sense. If you don't want light calculation to occur, you can disable chunk ticking altogether by setting `chunk-ticking.per-tick` to `0` in `pocketmine.yml`.
  - `player.anti-cheat.allow-movement-cheats`
- The following new options have been added to `server.properties`:
  - `enable-ipv6`: `on` by default. Disabling this completely disables IPv6 support.
  - `server-ipv6`: `::` by default (equivalent to "any IP", like `0.0.0.0` for IPv4). Most users shouldn't need to change this setting, and it doesn't appear in `server.properties` by default.
  - `server-portv6`: `19133` by default. You may run both IPv4 and IPv6 on the same port, but since Bedrock scans on 19133 by default, PM also uses the same.

### World handling
#### Interface
- Progress of spawn terrain chunk generation is now logged during initial world creation.

#### Functional
- Minecraft Bedrock worlds up to 1.12.x are now supported. (1.13+ are still **not supported** due to yet another format change, which is large and requires a lot of work).
- Automatic conversion of deprecated world formats is now implemented.
- All formats except `leveldb` have been deprecated. The following world formats will be **automatically converted on load to a new format**:
  - `mcregion`
  - `anvil`
  - `pmanvil`
- Generator options of existing worlds are now validated before loading them. If they are invalid, the server will fail to load them.
- Fixed the server attempting to generate a world if it failed to load.
- 256 build-height is now supported in all worlds (facilitated by automatic conversion).
- Extended blocks are now supported (facilitated by automatic conversion).
- The server will now attempt to translate invalid blocks to valid equivalents when loading chunks. This fixes many issues with `update!` blocks appearing in worlds, particularly ghost structures (these would appear when world editors previously erased some blocks by setting their IDs but not metadata).
- Lighting is no longer stored or loaded from disk - instead, it's calculated on the fly as-needed. This fixes many long-standing bugs.
- Explosions now use the standard mechanism for processing block updates. Previously, it used a special mechanism due to prohibitively poor efficiency of the standard algorithm. Since these inefficiencies have now been addressed, explosions can now be consistent with everything else, with minimal performance impact.
- Fixed debug spam of `chunk has no loaders registered` messages during chunk generation.
- Various cases of corrupted data in chunks will now cause an error to be logged instead of a server crash. This includes tiles with colliding positions and tiles in incorrect, non-loaded chunks.
- Fixed players re-requesting the same ungenerated chunks multiple times before they were sent.
- Fixed players re-requesting chunks when turning their heads or jumping.

#### Performance
- `leveldb` is now the primary supported world format. It is inherently faster than region-based formats thanks to better design.
- Partial chunk saves (only saving modified subcomponents of chunks) has been implemented. This drastically reduces the amount of data that is usually necessary to write on chunk save, which in turn **drastically reduces the time to complete world saves**. This is possible thanks to the modular design of the `leveldb` world format - this enhancement is not possible with region-based formats.
- Lighting is no longer guaranteed to be available on every chunk. It's now calculated on the fly as-needed.
- Z-order curves (morton codes) are now used for block and chunk coordinate hashes. This substantially improves performance in many areas by resolving a hashtable key hash collision performance issue. Affected areas include explosions, light calculation, and more.
- Improved performance of `World->setBlock()` by around 35% when the `$update` parameter is set to `true`.
- Improved performance of `World->setBlock()` by around 30% when the `$update` parameter is set to `false`.

### Logging
- Many components now have a dedicated logger which automatically adds [prefixes] to their messages.
- Main logger now includes milliseconds in timestamps.
- Debug messages are now logged when reach distance checks prevent players from doing something.
- Various messages related to world loading/generation/conversion and plugin loading errors are now localized according to the language set in `server.properties`.
- Exception log format has been changed. Now, exception info is logged in one big block message. This saves space on the console and improves readability, as well as reducing the ability for bad `ThreadedLoggerAttachment`s to break exception output.
- Improved error messages when a plugin command name or alias contains an illegal character.
- The server will now log an EMERGENCY-level message when `Server->forceShutdown()` is used for any other reason than a graceful shutdown.

### Network
This version features substantial changes to the network system, improving coherency, reliability and modularity.

#### Performance
- [`libdeflate`](https://github.com/ebiggers/libdeflate) is now (optionally) used for outbound Minecraft packet compression. It's more than twice as fast as zlib in most cases, providing significant performance boosts to packet broadcasts and overall network performance.

#### Minecraft Bedrock packet encryption
- This fixes replay attacks where hackers steal and replay player logins.
- A new setting has been added to `pocketmine.yml`: `network.enable-encryption` which is `true` by default.

#### Error handling
- Only `BadPacketException` is now caught during packet decode and handling. This requires that all decoding MUST perform proper data error checking.
  - Throwing a `BadPacketException` from decoding will now cause players to be kicked with the message `Packet processing error`.
  - The disconnect message includes a random hex ID to help server owners identify the problems reported by their players.
- Throwing any other exception will now cause a server crash. `Internal server error` has been removed.
- It is now illegal to send a clientbound packet to the server. Doing so will result in the client being kicked with the message `Unexpected non-serverbound packet`.
- Fixed server crash when unable to bind to the desired port. Now, the server will show an error and gracefully stop without a crashdump instead.

#### New packet handler system
- Packet handlers have been separated from NetworkSession into a dedicated packet handler structure.
- A network session may have exactly 1 handler at a time, which is mutable and may be replaced at any time. This allows packet handling logic to be broken up into multiple stages:
  - preventing undefined behaviour when sending wrong packets at the wrong time (they'll now be silently dropped)
  - allowing the existence of ephemeral state-specific logic (for example stricter resource packs download checks)
- Packet handlers are now almost entirely absent from `Player` and instead appear in their own dedicated units.
- Almost all game logic that was previously locked up inside packet handlers in `Player` has been extracted into new API methods. See Player API changes for details.

### Plugin loading
- Phar plugins are now able to depend on folder plugins loaded by DevTools.
- A new "plugin greylist" feature has been introduced, which allows whitelisting or blacklisting plugins from loading. See `plugin_list.yml`.

### Internals
- The `pocketmine` subdirectory has been removed from `src`. [PSR-4 autoloading is now used thanks to Composer](https://github.com/pmmp/PocketMine-MP/blob/4.0.0/composer.json#L63).
- Crashdump rendering has been separated from crashdump data generation. This allows rendering crashdumps from existing JSON data.
- Direct iteration of arrays with string keys is now disallowed by a custom PHPStan rule. This is because numeric strings are casted to integers when used as array keys, which produces a variety of unexpected behaviour particularly for iteration.
  - To iterate on arrays with string keys, `Utils::stringifyKeys()` must now be used.
- Fixed various crashes involving arrays with numeric string keys.

## API
### General
- Most places which previously allowed `callable` now only allow `\Closure`. This is because closures have more consistent behaviour and are more performant.
- `void` and `?nullable` parameter and return types have been applied in many places.
- Everything in the `pocketmine\metadata` namespace and related implementations have been removed.

### Changes to `plugin.yml`
#### Permission nesting
Permission nesting is no longer supported in `plugin.yml`. Grouping permissions (with defaults) in `plugin.yml` had very confusing and inconsistent behaviour.
Instead of nesting permission declarations, they should each be declared separately.

_Before_:
```
permissions:
   pmmp:
     default: op
	 children:
	     pmmp.something:
		     default: op
         pmmp.somethingElse
		     default: op
```

_After_:
```
permissions:
    pmmp.something:
        default: op
    pmmp.somethingElse
        default: op
```

#### `src-namespace-prefix`
A new directive `src-namespace-prefix` has been introduced. This allows you to get rid of those useless subdirectories in a plugin's structure.
For example, a plugin whose main was `pmmp\TesterPlugin\Main` used to have to be structured like this:
```
|-- plugin.yml
|-- src/
    |-- pmmp/
        |-- TesterPlugin/
            |-- Main.php
            |-- SomeOtherClass.php
            |-- SomeNamespace/
                |-- SomeNamespacedClass.php
```
However, if we add `src-namespace-prefix: pmmp\TesterPlugin` to the `plugin.yml`, now we can get rid of the useless directories and structure it like this instead:
```
|-- plugin.yml
|-- src/
    |-- Main.php
    |-- SomeOtherClass.php
    |-- SomeNamespace/
        |-- SomeNamespacedClass.php
```

**Note**: The old structure will also still work just fine. This is not a required change.

### Other changes
- Incorrect structure of `commands` is now detected earlier and handled more gracefully.
- Commands must now declare `permission` for each command. Previously, the `permission` key was optional, causing anyone to be able to use the command.
  - This behaviour was removed because of the potential for security issues - a typo in `plugin.yml` could lead to dangerous functionality being exposed to everyone.
  - If you want to make a command that everyone can use, declare a permission with a `default` of `true` and assign it to the command.
- Permissions must now declare `default` for each permission. Previously, the `default` key was optional, causing the permission to silently be denied to everyone (PM4) or granted to ops implicitly (PM3).

### Block
- A new `VanillaBlocks` class has been added, which contains static methods for creating any currently-known block type. This should be preferred instead of use of `BlockFactory::get()` where constants were used.
- `BlockFactory` is now a singleton, and its methods are no longer static. `BlockFactory::whatever()` should be replaced with `BlockFactory::getInstance()->whatever()`.
- `BlockFactory->get()` is now **deprecated**.
  - For most cases, `VanillaBlocks::WHATEVER_BLOCK()` should fill your needs.
  - `BlockFactory` should now only be used for loading old save data from, for example, a database, config or a world save.
  - To refer to blocks by name, consider using `StringToItemParser` to accept names instead of IDs.
- Blocks now contain their positions instead of extending `Position`. `Block->getPosition()` has been added.
- Blocks with IDs >= 256 are now supported.
- Block state and variant metadata have been separated.
  - Variant is considered an extension of ID and is immutable.
  - `Block->setDamage()` has been removed.
- All blocks now have getters and setters for their appropriate block properties, such as facing, lit/unlit, colour (in some cases), and many more. These should be used instead of metadata.
- Tile entities are now created and deleted automatically when `World->setBlock()` is used with a block that requires a tile entity.
- Some tile entities' API has been exposed on their corresponding `Block` classes, with the tile entity classes being deprecated.
- The `pocketmine\tile` namespace has been relocated to `pocketmine\block\tile`.
- `Block->recalculateBoundingBox()` and `Block->recalculateCollisionBoxes()` are now expected to return AABBs relative to `0,0,0` instead of their own position.
- Block break-info has been extracted into a new dynamic `BlockBreakInfo` unit. The following methods have been moved:
  - `Block->getBlastResistance()` -> `BlockBreakInfo->getBlastResistance()`
  - `Block->getBreakTime()` -> `BlockBreakInfo->getBreakTime()`
  - `Block->getHardness()` -> `BlockBreakInfo->getHardness()`
  - `Block->getToolHarvestLevel()` -> `BlockBreakInfo->getToolHarvestLevel()`
  - `Block->getToolType()` -> `BlockBreakInfo->getToolType()`
  - `Block->isBreakable()` -> `BlockBreakInfo->isBreakable()`
  - `Block->isCompatibleWithTool()` -> `BlockBreakInfo->isToolCompatible()`
- The following API methods have been added:
  - `Block->asItem()`: returns an itemstack corresponding to the block
  - `Block->getModelPositionOffset()`: used to offset the bounding box of blocks like bamboo based on coordinates
  - `Block->isSameState()`: returns whether the block is the same as the parameter, including state information
  - `Block->isSameType()`: returns whether the block is the same as the parameter, without state information
  - `Block->isFullCube()`
  - `Liquid->getMinAdjacentSourcesToFormSource()`: returns how many adjacent source blocks of the same liquid must be present in order for the current block to become a source itself
- The following hooks have been added:
  - `Block->onAttack()`: called when a player in survival left-clicks the block to try to start breaking it
  - `Block->onEntityLand()`: called when an entity lands on this block after falling (from any distance)
  - `Block->onPostPlace()`: called directly after placement in the world, handles things like rail connections and chest pairing
- The following API methods have been renamed:
  - `Block->getDamage()` -> `Block->getMeta()`
  - `Block->onActivate()` -> `Block->onInteract()`
  - `Block->onEntityCollide()` -> `Block->onEntityInside()`
- The following API methods have changed signatures:
  - `Block->onInteract()` now has the signature `onInteract(Item $item, int $face, Vector3 $clickVector, ?Player $player = null) : bool`
  - `Block->getCollisionBoxes()` is now final. Classes should override `recalculateCollisionBoxes()`.
- The following API methods have been removed:
  - `Block->canPassThrough()`
  - `Block->setDamage()`
  - `Block::get()`: this was superseded by `BlockFactory::get()` a long time ago
  - `Block->getBoundingBox()`
- The following classes have been added:
  - `inventory\CraftingTableInventory`: represents a crafting table's 3x3 crafting grid
  - `utils\LeverFacing`
  - `utils\MinimumFlowCostCalculator`: encapsulates flow calculation logic previously locked inside `Liquid`.
- The following classes have been renamed:
  - `BlockIds` -> `BlockLegacyIds`
  - `CobblestoneWall` -> `Wall`
  - `NoteBlock` -> `Note`
  - `SignPost` -> `FloorSign`
  - `StandingBanner` -> `FloorBanner`
- The following classes have been removed:
  - `Bricks`
  - `BurningFurnace`
  - `CobblestoneStairs`
  - `Dandelion`
  - `DoubleSlab`
  - `DoubleStoneSlab`
  - `EndStone`
  - `GlowingRedstoneOre`
  - `GoldOre`
  - `Gold`
  - `IronDoor`
  - `IronOre`
  - `IronTrapdoor`
  - `Iron`
  - `Lapis`
  - `NetherBrickFence`
  - `NetherBrickStairs`
  - `Obsidian`
  - `PurpurStairs`
  - `Purpur`
  - `QuartzStairs`
  - `Quartz`
  - `RedSandstoneStairs`
  - `RedSandstone`
  - `SandstoneStairs`
  - `Sandstone`
  - `StainedClay`
  - `StainedGlassPane`
  - `StainedGlass`
  - `StoneBrickStairs`
  - `StoneBricks`
  - `StoneSlab2`
  - `StoneSlab`
  - `Stone`
  - `WallBanner`
  - `WallSign`
  - `Wood2`
- `BlockToolType` constants have been renamed to remove the `TYPE_` prefix.

### Command
- The following classes have been removed:
  - `PluginIdentifiableCommand` - use `PluginOwned` and `PluginOwnedTrait`
  - `RemoteConsoleCommandSender`
- The following API methods have signature changes:
  - `Command->setPermission()` argument is now mandatory (but still nullable).
  - `CommandSender->setScreenLineHeight()` argument is now mandatory (but still nullable).
  - `Command->getDescription()` now returns `Translatable|string`.
  - `Command->getUsage()` now returns `Translatable|string`.
  - `Command->setDescription()` now accepts `Translatable|string`.
  - `Command->setUsage()` now accepts `Translatable|string`.
- `Command->setPermission()` now throws an exception if given a string containing non-existing permissions. Previously, it would silently default to allowing ops to use the command, which may not have been desired.
  - This is usually caused by a typo or forgotten permission declaration.
- Commands with spaces in the name are no longer supported.
- Command usage strings and description strings are no longer automatically translated (use `Translatable` instead of bare string keys).

### Entity
#### General
- `Entity` no longer extends from `Location`. `Entity->getLocation()` and `Entity->getPosition()` should be used instead.
- Ender inventory has been refactored. It's now split into two parts:
  - `EnderChestInventory` is a temporary gateway "inventory" that acts as a proxy to the player's ender inventory. It has a `Position` for holder. This is discarded when the player closes the inventory window.
  - `PlayerEnderInventory` is the storage part. This is stored in `Human` and does not contain any block info.
  - To open the player's ender inventory, use `Player->setCurrentWindow(new EnderChestInventory($blockPos, $player->getEnderInventory()))`.
- The following public fields have been removed:
  - `Entity->chunk`: Entities no longer know which chunk they are in (the `World` now manages this instead).
  - `Entity->height`: moved to `EntitySizeInfo`; use `Entity->size` instead
  - `Entity->width`: moved to `EntitySizeInfo`; use `Entity->size` instead
  - `Entity->eyeHeight`: moved to `EntitySizeInfo`; use `Entity->size` instead
- The following API methods have been added:
  - `Entity->getFallDistance()`
  - `Entity->setFallDistance()`
  - `ItemEntity->getDespawnDelay()`
  - `ItemEntity->setDespawnDelay()`
  - `Living->calculateFallDamage()`: this is `protected`, and may be overridden by subclasses to provide custom damage logic
  - `Human->getHungerManager()`
  - `Human->getXpManager()`
- The following methods have signature changes:
  - `Entity->entityBaseTick()` is now `protected`.
  - `Entity->move()` is now `protected`.
  - `Entity->setPosition()` is now `protected` (use `Entity->teleport()` instead).
  - `Entity->setPositionAndRotation()` is now `protected` (use `Entity->teleport()` instead).
  - `Living->knockBack()` now accepts `float, float, float` (the first two parameters have been removed).
  - `Living->getEffects()` now returns `EffectManager` instead of `Effect[]`.
  - `Location->__construct()` now accepts `?World $world` in the 4th parameter, and all parameters are now mandatory.
- The following classes have been added:
  - `effect\EffectManager`: contains effect-management functionality extracted from `Living`
  - `HungerManager`: contains hunger-management functionality extracted from `Human`
  - `ExperienceManager`: contains XP-management functionality extracted from `Human`
- The following API methods have been moved / renamed:
  - `Entity->fall()` -> `Entity->onHitGround()` (and visibility changed to `protected` from `public`)
  - `Living->removeAllEffects()` -> `EffectManager->clear()`
  - `Living->removeEffect()` -> `EffectManager->remove()`
  - `Living->addEffect()` -> `EffectManager->add()`
  - `Living->getEffect()` -> `EffectManager->get()`
  - `Living->hasEffect()` -> `EffectManager->has()`
  - `Living->hasEffects()` -> `EffectManager->hasEffects()`
  - `Living->getEffects()` -> `EffectManager->all()`
  - `Human->getFood()` -> `HungerManager->getFood()`
  - `Human->setFood()` -> `HungerManager->setFood()`
  - `Human->getMaxFood()` -> `HungerManager->getMaxFood()`
  - `Human->addFood()` -> `HungerManager->addFood()`
  - `Human->isHungry()` -> `HungerManager->isHungry()`
  - `Human->getEnderChestInventory()` -> `Human->getEnderInventory()`
  - `Human->getSaturation()` -> `HungerManager->getSaturation()`
  - `Human->setSaturation()` -> `HungerManager->setSaturation()`
  - `Human->addSaturation()` -> `HungerManager->addSaturation()`
  - `Human->getExhaustion()` -> `HungerManager->getExhaustion()`
  - `Human->setExhaustion()` -> `HungerManager->setExhaustion()`
  - `Human->exhaust()` -> `HungerManager->exhaust()`
  - `Human->getXpLevel()` -> `ExperienceManager->getXpLevel()`
  - `Human->setXpLevel()` -> `ExperienceManager->setXpLevel()`
  - `Human->addXpLevels()` -> `ExperienceManager->addXpLevels()`
  - `Human->subtractXpLevels()` -> `ExperienceManager->subtractXpLevels()`
  - `Human->getXpProgress()` -> `ExperienceManager->getXpProgress()`
  - `Human->setXpProgress()` -> `ExperienceManager->setXpProgress()`
  - `Human->getRemainderXp()` -> `ExperienceManager->getRemainderXp()`
  - `Human->getCurrentTotalXp()` -> `ExperienceManager->getCurrentTotalXp()`
  - `Human->setCurrentTotalXp()` -> `ExperienceManager->setCurrentTotalXp()`
  - `Human->addXp()` -> `ExperienceManager->addXp()`
  - `Human->subtractXp()` -> `ExperienceManager->subtractXp()`
  - `Human->getLifetimeTotalXp()` -> `ExperienceManager->getLifetimeTotalXp()`
  - `Human->setLifetimeTotalXp()` -> `ExperienceManager->setLifetimeTotalXp()`
  - `Human->canPickupXp()` -> `ExperienceManager->canPickupXp()`
  - `Human->onPickupXp()` -> `ExperienceManager->onPickupXp()`
  - `Human->resetXpCooldown()` -> `ExperienceManager->resetXpCooldown()`
- The following API methods have been removed:
  - `Human->getRawUniqueId()`: use `Human->getUniqueId()->getBytes()` instead
- The following classes have been removed:
  - `Creature`
  - `Damageable`
  - `Monster`
  - `NPC`
  - `Rideable`
  - `Vehicle`
- `Skin` now throws exceptions on creation if given invalid data.
- Fixed `Living->lookAt()` not taking eye height into account.

#### Effect
- All `Effect` related classes have been moved to the `pocketmine\entity\effect` namespace.
- Effect functionality embedded in the `Effect` class has been separated out into several classes. The following classes have been added:
  - `AbsorptionEffect`
  - `HealthBoostEffect`
  - `HungerEffect`
  - `InstantDamageEffect`
  - `InstantEffect`
  - `InstantHealthEffect`
  - `InvisibilityEffect`
  - `LevitationEffect`
  - `PoisonEffect`
  - `RegenerationEffect`
  - `SaturationEffect`
  - `SlownessEffect`
  - `SpeedEffect`
  - `WitherEffect`
- `VanillaEffects` class has been added. This exposes all vanilla effect types as static methods, replacing the old `Effect::getEffect()` nastiness.
  - Example: `Effect::getEffect(Effect::NIGHT_VISION)` can be replaced by `VanillaEffects::NIGHT_VISION()`.
- Negative effect amplifiers are now explicitly disallowed due to undefined behaviour they created.
- The boundaries between MCPE effect IDs and PocketMine-MP internals are now more clear.
  - ID handling is moved to `pocketmine\data\bedrock\EffectIdMap`.
  - All effect ID constants have been removed from `Effect`. `pocketmine\data\bedrock\EffectIds` if you still need legacy effect IDs for some reason.
- The following API methods have been moved:
  - `Effect->getId()` -> `EffectIdMap->toId()`
  - `Effect::registerEffect()` -> `EffectIdMap->register()`
  - `Effect::getEffect()` -> `EffectIdMap->fromId()`
  - `Effect::getEffectByName()` -> `StringToEffectParser->parse()`
- Added `StringToEffectParser` singleton:
  - Supports custom aliases!
  - This is used by `/effect` to provide name support.

#### Removal of runtime entity NBT
- Entities no longer keep their NBT alive at runtime.
  - `Entity->namedtag` has been removed.
  - `Entity->saveNBT()` now returns a newly created `CompoundTag` instead of modifying the previous one in-place.
  - `Entity->initEntity()` now accepts a `CompoundTag` parameter.

#### Entity creation
- `Entity::createEntity()` has been removed. It's no longer needed for creating new entities at runtime - just use `new YourEntity` instead.
- `Entity` subclass constructors can now have any signature, just like a normal class.
- Loading entities from NBT is now handled by `EntityFactory`. It works quite a bit differently than `Entity::createEntity()` did. Instead of registering `YourEntity::class` to a set of Minecraft save IDs, you now need to provide a callback which will construct an entity when given some NBT and a `World`.
  - `EntityFactory` is a singleton. You can get its instance by using `EntityFactory::getInstance()`.
  - Creation callbacks are registered using `EntityFactory->register()`.
  - Creation callbacks must have the signature `function(World, CompoundTag) : Entity`.
  - This enables `Entity` subclasses to have any constructor parameters they like.
  - It also allows requiring that certain data is always provided (for example, it doesn't make much sense to create a `FallingBlock` without specifying what type of block).
  - Examples:
    - `ItemEntity` now requires an `Item` in its constructor, so its creation callback decodes the `Item` from the NBT to be passed to the constructor.
    - `Painting` now requires a `PaintingMotive` in its constructor, so its creation callback decides which `PaintingMotive` to provide based on the NBT it receives.
    - See `EntityFactory` for more examples.
- `EntityFactory->register()` (previously `Entity::registerEntity()`) will now throw exceptions on error cases instead of returning `false`.
- The following API methods have been moved:
  - `Entity::registerEntity()` -> `EntityFactory->register()`
- The following classes have changed constructors:
  - All projectile subclasses now require a `?Entity $thrower` parameter.
  - `Arrow->__construct()` now requires a `bool $critical` parameter (in addition to the `$thrower` parameter).
  - `ExperienceOrb->__construct()` now requires a `int $xpValue` parameter.
  - `FallingBlock->__construct()` now requires a `Block $block` parameter.
  - `ItemEntity->__construct()` now requires an `Item $item` parameter.
  - `Painting->__construct()` now requires a `PaintingMotive $motive` parameter.
  - `SplashPotion->__construct()` now requires a `int $potionId` parameter.
- The following API methods have been removed:
  - `Entity::createBaseNBT()`: `new YourEntity` and appropriate API methods should be used instead
  - `Entity->getSaveId()`
  - `Entity::getKnownEntityTypes()`
  - `Entity::createEntity()`: use `new YourEntity` instead (to be reviewed)

#### WIP removal of entity network metadata
- All network metadata related constants have been removed from the `Entity` class and moved to the protocol layer. It is intended to remove network metadata from the API entirely, but this has not yet been completed.
  - `Entity::DATA_FLAG_*` constants have been moved to `pocketmine\network\mcpe\protocol\types\entity\EntityMetadataFlags`.
  - `Entity::DATA_TYPE_*` constants have been moved to `pocketmine\network\mcpe\protocol\types\entity\EntityMetadataTypes`.
  - `Entity::DATA_*` constants have been moved to `pocketmine\network\mcpe\protocol\types\entity\EntityMetadataProperties`.
- `DataPropertyManager` has been moved to the `pocketmine\network\mcpe\protocol\types\entity` namespace, and as such isn't considered part of the API anymore.
- Introduced internal `Entity` hook `syncNetworkData()`. This function is expected to synchronize entity properties with the entity's network data set.
- Internal usage of network metadata sets to store internal entity properties has been removed. Entities are now expected to use regular class properties and synchronize with the network data set as-asked.
- `Entity->propertyManager` has been renamed to `Entity->networkProperties`.
- `Entity->getDataPropertyManager()` has been renamed to `Entity->getNetworkProperties()`.

### Event
#### Internal event system no longer depends on `Listener`s
- The internal event processing system no longer depends on `Listener` objects. Arbitrary closures can now be used, provided that they satisfy the standard requirements to be a handler.
  - This change improves performance of event handler calling by approximately 15%. This does not include anything plugins are doing.
  - The following classes have been removed:
    - `pocketmine\plugin\EventExecutor`
    - `pocketmine\plugin\MethodEventExecutor`
  - `RegisteredListener->__construct()` now requires `Closure` instead of `Listener, EventExecutor` as the leading parameters.
  - `RegisteredListener->getListener()` has been removed.

#### Default cancelled handling behaviour has changed
- Handler functions will now **not receive cancelled events by default**. This is a **silent BC break**, i.e. it won't raise errors, but it might cause bugs.
- `@ignoreCancelled` is now no longer respected.
- `@handleCancelled` has been added. This allows opting _into_ receiving cancelled events (it's the opposite of `@ignoreCancelled`).
  - `@handleCancelled` may not be used on non-cancellable events (an exception will be thrown during registration).

#### `PlayerPreLoginEvent` changes
- The `Player` object no longer exists at this phase of the login. Instead, a `PlayerInfo` object is provided, along with connection information.
- Ban, server-full and whitelist checks are now centralized to `PlayerPreLoginEvent`. It's no longer necessary (or possible) to intercept `PlayerKickEvent` to handle these types of disconnects.
  - Multiple kick reasons may be set to ensure that the player is still removed if there are other reasons for them to be disconnected and one of them is cleared. For example, if a player is banned and the server is full, clearing the ban flag will still cause the player to be disconnected because the server is full.
  - Plugins may set custom kick reasons. Any custom reason has absolute priority.
  - If multiple flags are set, the kick message corresponding to the highest priority reason will be shown. The priority (as of this snapshot) is as follows:
    - Custom (highest priority)
    - Server full
    - Whitelisted
    - Banned
  - The `PlayerPreLoginEvent::KICK_REASON_PRIORITY` constant contains a list of kick reason priorities, highest first.
- The following constants have been added:
  - `PlayerPreLoginEvent::KICK_REASON_PLUGIN`
  - `PlayerPreLoginEvent::KICK_REASON_SERVER_FULL`
  - `PlayerPreLoginEvent::KICK_REASON_SERVER_WHITELISTED`
  - `PlayerPreLoginEvent::KICK_REASON_BANNED`
  - `PlayerPreLoginEvent::KICK_REASON_PRIORITY`: ordered list of kick reason priorities, highest first
- The following API methods have been added:
  - `PlayerPreLoginEvent->clearAllKickReasons()`
  - `PlayerPreLoginEvent->clearKickReason()`
  - `PlayerPreLoginEvent->getFinalKickMessage()`: the message to be shown to the player with the current reason list in place
  - `PlayerPreLoginEvent->getIp()`
  - `PlayerPreLoginEvent->getKickReasons()`: returns an array of flags indicating kick reasons, must be empty to allow joining
  - `PlayerPreLoginEvent->getPlayerInfo()`
  - `PlayerPreLoginEvent->getPort()`
  - `PlayerPreLoginEvent->isAllowed()`
  - `PlayerPreLoginEvent->isAuthRequired()`: whether XBL authentication will be enforced
  - `PlayerPreLoginEvent->isKickReasonSet()`
  - `PlayerPreLoginEvent->setAuthRequired()`
  - `PlayerPreLoginEvent->setKickReason()`
- The following API methods have been changed:
  - `PlayerPreLoginEvent->getKickMessage()` now has the signature `getKickMessage(int $flag) : ?string`
- The following API methods have been removed:
  - `PlayerPreLoginEvent->setKickMessage()`
  - `PlayerPreLoginEvent->getPlayer()`
- The following API methods have been moved / renamed:
  - `InventoryPickupItemEvent->getItem()` -> `InventoryPickupItemEvent->getItemEntity()`

#### Other changes
- Disconnecting players during events no longer crashes the server (although it might cause other side effects).
- Cancellable events must now implement `CancellableTrait` to get the cancellable components needed to satisfy interface requirements. `Event` no longer stubs these methods.
- `PlayerInteractEvent` is no longer fired when a player activates an item. This fixes the age-old complaint of `PlayerInteractEvent` firing multiple times when interacting once. The following constants have been removed:
  - `PlayerInteractEvent::LEFT_CLICK_AIR`
  - `PlayerInteractEvent::RIGHT_CLICK_AIR`
  - `PlayerInteractEvent::PHYSICAL`
- The following events have been added:
  - `BlockTeleportEvent`: block teleporting, for example dragon egg when attacked.
  - `EntityItemPickupEvent`: player (or other entity) picks up a dropped item (or arrow). Replaces `InventoryPickupItemEvent` and `InventoryPickupArrowEvent`.
    - Unlike its predecessors, this event supports changing the destination inventory.
    - If the destination inventory is `null`, the item will be destroyed. This is usually seen for creative players with full inventories.
  - `EntityTrampleFarmlandEvent`: mob (or player) jumping on farmland causing it to turn to dirt
  - `PlayerDisplayNameChangeEvent`
  - `PlayerEmoteEvent`
  - `PlayerEntityInteractEvent`: player right-clicking (or long-clicking on mobile) on an entity.
  - `PlayerItemUseEvent`: player activating their held item, for example to throw it.
  - `StructureGrowEvent`: called when trees or bamboo grow (or any other multi-block plant structure).
- The following events have changed behaviour:
  - Bone meal is now consistently never consumed when `BlockGrowEvent` or `StructureGrowEvent` is cancelled.
  - `BlockGrowEvent` is now called when cocoa pods grow.
  - `ChunkPopulateEvent` is now called after all adjacent chunks modified during population have been updated. This fixes issues with modifications made in the event sometimes disappearing.
  - `InventoryOpenEvent` is now fired when a player opens a crafting table's UI.
  - `InventoryCloseEvent` is now fired when a player closes a crafting table's UI.
  - `PlayerDropItemEvent` will now prevent the drops from force-closing of the following inventories:
    - anvil
    - enchanting table
    - loom
  - `PlayerKickEvent` is no longer fired for disconnects that occur before the player completes the initial login sequence (i.e. completing downloading resource packs).
- The following events have been removed:
  - `EntityArmorChangeEvent`
  - `EntityInventoryChangeEvent`
  - `EntityLevelChangeEvent` - `EntityTeleportEvent` with world checks should be used instead.
  - `InventoryPickupArrowEvent` - use `EntityItemPickupEvent` instead
  - `InventoryPickupItemEvent` - use `EntityItemPickupEvent` instead
  - `NetworkInterfaceCrashEvent`
  - `PlayerCheatEvent`
  - `PlayerIllegalMoveEvent`
- The following API methods have been added:
  - `EntityDeathEvent->getXpDropAmount()`
  - `EntityDeathEvent->setXpDropAmount()`
  - `PlayerDeathEvent->getXpDropAmount()`
  - `PlayerDeathEvent->setXpDropAmount()`
- The following API methods have been removed:
  - `PlayerPreLoginEvent->getPlayer()`
  - `Cancellable->setCancelled()`: this allows implementors of `Cancellable` to implement their own cancellation mechanisms, such as the complex one in `PlayerPreLoginEvent`
- The following API methods have been moved:
  - `Event->isCancelled()` -> `CancellableTrait->isCancelled()`: this was a stub which threw `BadMethodCallException` if the class didn't implement `Cancellable`; now this is simply not available on non-cancellable events
  - `Event->setCancelled()` has been split into `cancel()` and `uncancel()`, and moved to `CancellableTrait`
  - `HandlerList::unregisterAll()` -> `HandlerListManager->unregisterAll()`
  - `HandlerList::getHandlerListFor()` -> `HandlerListManager->getListFor()`
  - `HandlerList::getHandlerLists()` -> `HandlerListManager->getAll()`
- The following API methods have changed behaviour:
  - `PlayerCreationEvent->setPlayerClass()` now verifies that the player class set is instantiable.
- The following classes have been moved:
  - `pocketmine\plugin\RegisteredListener` -> `pocketmine\event\RegisteredListener`

### Inventory
- All crafting and recipe related classes have been moved to the `pocketmine\crafting` namespace.
- The following classes have been added:
  - `CallbackInventoryChangeListener`
  - `CreativeInventory`: contains the creative functionality previously embedded in `pocketmine\item\Item`, see Item changes for details
  - `InventoryChangeListener`: allows listening (but not interfering with) events in an inventory.
  - `PlayerCraftingInventory`: represents the player's own 2x2 crafting grid.
  - `PlayerEnderInventory`: represents the pure storage part of the player's ender inventory, without any block information
  - `TemporaryInventory`: interface which should be implemented by any inventory whose contents should be evacuated when closing.
  - `transaction\CreateItemAction`
  - `transaction\DestroyItemAction`
  - `transaction\TransactionBuilderInventory`: facilitates building `InventoryTransaction`s using standard `Inventory` API methods
- The following classes have been renamed / moved:
  - `ContainerInventory` -> `pocketmine\block\inventory\BlockInventory`
- The following classes have been moved to the `pocketmine\block\inventory` namespace:
  - `AnvilInventory`
  - `ChestInventory`
  - `DoubleChestInventory`
  - `EnchantInventory`
  - `EnderChestInventory`
  - `FurnaceInventory`
- The following classes have been removed:
  - `CustomInventory`
  - `InventoryEventProcessor`
  - `Recipe`
  - `transaction\CreativeInventoryAction`
- The following API methods have been added:
  - `Inventory->addChangeListeners()`
  - `Inventory->getChangeListeners()`
  - `Inventory->removeChangeListeners()`
  - `Inventory->swap()`: swaps the contents of two slots
  - `Inventory->getAddableItemQuantity()`: returns how many items from the given stack can be added to the inventory, used for partial pickups of itemstacks with a full inventory
- The following API methods have been removed:
  - `BaseInventory->getDefaultSize()`
  - `BaseInventory->setSize()`
  - `CraftingGrid->getHolder()`
  - `EnderChestInventory->setHolderPosition()`
  - `Inventory->close()`
  - `Inventory->dropContents()`
  - `Inventory->getName()`
  - `Inventory->getTitle()`
  - `Inventory->onSlotChange()`
  - `Inventory->open()`
  - `Inventory->sendContents()`
  - `Inventory->sendSlot()`
  - `InventoryAction->onExecuteFail()`
  - `InventoryAction->onExecuteSuccess()`
  - `PlayerInventory->sendCreativeContents()`
- The following API methods have signature changes:
  - `BaseInventory->__construct()` no longer accepts a list of items to initialize with.
  - `CraftingGrid->__construct()` no longer accepts a `Player` parameter. 
  - `Inventory->clear()` now returns `void` instead of `bool`.
  - `Inventory->setItem()` now returns `void` instead of `bool`.
  - `InventoryAction->execute()` now returns `void` instead of `bool`.
- `PlayerInventory->setItemInHand()` now sends the update to viewers of the player.
- `CraftingGrid` is now abstract.

### Item
#### General
- A new `VanillaItems` class has been added, which contains static methods for creating any currently-known item type. This should be preferred instead of use of `ItemFactory::get()` where constants were used.
- `StringToItemParser` singleton has been added:
  - This allows mapping any string to any item, irrespective of IDs
  - These mappings are used by `/give` and `/clear`, and are made with custom plugin aliases in mind.
  - Yes, this means you can finally add your own custom aliases to `/give` without ugly hacks!
- `LegacyStringToItemParser` singleton has been added. This supports id:meta parsing in the same way that `ItemFactory::fromString()` used to, but its use is discouraged.
- `ItemFactory` is now a singleton instead of static class, and its remaining methods are no longer static. You can get its instance by `ItemFactory::getInstance()`.
- `Item->count` is no longer public.
- The hierarchy of writable books has been changed: `WritableBook` and `WrittenBook` now extend `WritableBookBase`.
- The following API methods have signature changes:
  - `WritableBookBase->setPages()` now accepts `WritableBookPage[]` instead of `CompoundTag[]`.
  - `ItemFactory->get()` no longer accepts `string` for the `tags` parameter.
- The following methods are now fluent:
  - `WritableBookBase->setPages()`
  - `Item->addEnchantment()`
  - `Item->removeEnchantment()`
  - `Item->removeEnchantments()`
  - `Armor->setCustomColor()`
  - `WrittenBook->setTitle()`
  - `WrittenBook->setAuthor()`
  - `WrittenBook->setGeneration()`
- The following API methods have been removed:
  - `Item->getNamedTagEntry()`
  - `Item->removeNamedTagEntry()`
  - `Item->setDamage()`: "Damage" is now immutable for all items except `Durable` descendents.
  - `Item->setNamedTagEntry()`
  - `Item::get()`: prefer `VanillaItems` or `StringToItemParser` if possible; use `ItemFactory->get()` if you have no other choice
  - `Item::fromString()`: use `StringToItemParser->parse()` or `LegacyStringToItemParser->parse()` instead
  - `ItemFactory::fromString()`
  - `Item->setCompoundTag()`
  - `Item->getCompoundTag()`
  - `Item->hasCompoundTag()`
  - `Potion::getPotionEffectsById()`
  - `ProjectileItem->getProjectileEntityType()`
- The following constants have been removed:
  - `Potion::ALL` - use `PotionType::getAll()` instead
  - `Potion::WATER`
  - `Potion::MUNDANE`
  - `Potion::LONG_MUNDANE`
  - `Potion::THICK`
  - `Potion::AWKWARD`
  - `Potion::NIGHT_VISION`
  - `Potion::LONG_NIGHT_VISION`
  - `Potion::INVISIBILITY`
  - `Potion::LONG_INVISIBILITY`
  - `Potion::LEAPING`
  - `Potion::LONG_LEAPING`
  - `Potion::STRONG_LEAPING`
  - `Potion::FIRE_RESISTANCE`
  - `Potion::LONG_FIRE_RESISTANCE`
  - `Potion::SWIFTNESS`
  - `Potion::LONG_SWIFTNESS`
  - `Potion::STRONG_SWIFTNESS`
  - `Potion::SLOWNESS`
  - `Potion::LONG_SLOWNESS`
  - `Potion::WATER_BREATHING`
  - `Potion::LONG_WATER_BREATHING`
  - `Potion::HEALING`
  - `Potion::STRONG_HEALING`
  - `Potion::HARMING`
  - `Potion::STRONG_HARMING`
  - `Potion::POISON`
  - `Potion::LONG_POISON`
  - `Potion::STRONG_POISON`
  - `Potion::REGENERATION`
  - `Potion::LONG_REGENERATION`
  - `Potion::STRONG_REGENERATION`
  - `Potion::STRENGTH`
  - `Potion::LONG_STRENGTH`
  - `Potion::STRONG_STRENGTH`
  - `Potion::WEAKNESS`
  - `Potion::LONG_WEAKNESS`
  - `Potion::WITHER`
- The following methods have been renamed:
  - `Item->getDamage()` -> `Item->getMeta()`
- The following methods have been moved to `pocketmine\inventory\CreativeInventory`:
  - `Item::addCreativeItem()` -> `CreativeInventory::add()`
  - `Item::clearCreativeItems()` -> `CreativeInventory::clear()`
  - `Item::getCreativeItemIndex()` -> `CreativeInventory::getItemIndex()`
  - `Item::getCreativeItems()` -> `CreativeInventory::getAll()`
  - `Item::initCreativeItems()` -> `CreativeInventory::reset()`
  - `Item::isCreativeItem()` -> `CreativeInventory::contains()`
  - `Item::removeCreativeItem()` -> `CreativeInventory::remove()`
- The following classes have been added:
  - `ArmorTypeInfo`
  - `Fertilizer`
  - `LiquidBucket`
  - `MilkBucket`
  - `PotionType`: enum class containing information about vanilla potion types
  - `Releasable`: this interface is implemented by items like bows which have a "release" action
  - `StringToItemParser`: allows converting string IDs into any item, used by `/give` and `/clear`
  - `WritableBookBase`
  - `WritableBookPage`
- The following API methods have been added:
  - `Armor->getArmorSlot()`
  - `Item->canStackWith()`: returns whether the two items could be contained in the same inventory slot, ignoring count and stack size limits
  - `Potion->getType()`: returns a `PotionType` enum object containing information such as the applied effects
  - `ProjectileItem->createEntity()`: returns a new instance of the projectile entity that will be thrown
- The following classes have been removed:
  - `ChainBoots`
  - `ChainChestplate`
  - `ChainHelmet`
  - `ChainLeggings`
  - `DiamondBoots`
  - `DiamondChestplate`
  - `DiamondHelmet`
  - `DiamondLeggings`
  - `GoldBoots`
  - `GoldChestplate`
  - `GoldHelmet`
  - `GoldLeggings`
  - `IronBoots`
  - `IronChesplate`
  - `IronHelmet`
  - `IronLeggings`
  - `LeatherBoots`
  - `LeatherCap`
  - `LeatherPants`
  - `LeatherTunic`

#### NBT handling
- Serialized NBT byte array caches are no longer stored on itemstacks. These caches were a premature optimization used for network layer serialization and as such were dependent on the network NBT format.
- Internal NBT usage has been marginalized. It's no longer necessary to immediately write changes to NBT. The following hooks have been added:
  - `Item->serializeCompoundTag()`
  - `Item->deserializeCompoundTag()`
- It's planned to remove runtime NBT from items completely, but this currently presents unresolved backwards-compatibility problems.

#### Enchantment
- `VanillaEnchantments` class has been added. This exposes all vanilla enchantment types as static methods, replacing the old `Enchantment::get()` nastiness.
  - Example: `Enchantment::get(Enchantment::PROTECTION)` is replaced by `VanillaEnchantments::PROTECTION()`
  - These methods also provide proper type information to static analysers instead of just generic `Enchantment`, making them easier to code with.
- The boundaries between MCPE enchantment IDs and PocketMine-MP internals are now more clear.
  - ID handling is moved to `pocketmine\data\bedrock\EnchantmentIdMap` singleton.
  - All enchantment ID constants have been removed from `Enchantment`. `pocketmine\data\bedrock\EnchantmentIds` if you still need legacy effect IDs for some reason.
- `Enchantment::RARITY_*` constants were moved to `Rarity` class, and the `RARITY_` prefixes removed.
- `Enchantment::SLOT_*` constants were moved to `ItemFlags` class, and the `SLOT_` prefixes removed.
- The following API methods have been moved:
  - `Enchantment::registerEnchantment()` -> `EnchantmentIdMap->register()`
  - `Enchantment::getEnchantment()` -> `EnchantmentIdMap->fromId()`
  - `Enchantment->getId()` -> `EnchantmentIdMap->toId()`
  - `Enchantment::getEnchantmentByName()` -> `StringToEnchantmentParser->parse()`

### Lang
- The following classes have been renamed:
  - `BaseLang` -> `Language`
  - `TranslationContainer` -> `Translatable`
- The following classes have been removed:
  - `TextContainer`
- The following API methods have been added:
  - `Translatable->format()`: allows adding formatting (such as color codes) to a translation
  - `Translatable->prefix()`: allows prefixing formatting
  - `Translatable->postfix()`: allows postfixing formatting
- The following API methods have changed signatures:
  - `Translatable->__construct()` now accepts `array<int|string, Translatable|string>` for parameters, instead of just `list<string>`.
  - `Translatable->getParameter()` now accepts `int|string` for the index instead of just `int`.
  - `Translatable->getParameter()` now returns `Translatable|string` instead of just `string`.
  - `Translatable->getParameters()` now returns `array<int|string, Translatable|string>`.
- `LanguageNotFoundException` has been added. This is thrown when trying to construct a `Language` which doesn't exist in the server files.
- `Translatable` no longer discards keys for translation parameters. Previously, only the insertion order was considered.
- `Translatable` now supports string keys for translation parameters.
- `Translatable` now supports providing other `Translatable`s as translation parameters.
- `Language->translateString()` now supports providing `Translatable`s as translation parameters.
- `Language->translateString()` no longer automatically attempts to translate string parameters. If you want them to be translated, translate them explicitly. This fixes bugs where player chat messages containing translation keys would be unexpectedly translated.
- `Language->translate()` no longer attempts to translate string parameters of `Translatable` (same rationale as previous point).

### Network
- The following fields have been removed:
  - `Network::$BATCH_THRESHOLD`
- The following classes have been added:
  - `NetworkInterfaceStartException`: this may be thrown by `Network->registerInterface()` and `NetworkInterface->start()` to cause a graceful failure without crashing - this should be used when, for example, you are unable to bind a port
- The following classes have been renamed:
  - `SourceInterface` -> `NetworkInterface`
  - `AdvancedSourceInterface` -> `AdvancedNetworkInterface`
- The following classes have been moved:
  - `CompressBatchedTask` -> `mcpe\CompressBatchTask`
  - `level\format\io\ChunkRequestTask` -> `mcpe\ChunkRequestTask`
  - `mcpe\RakLibInterface` -> `mcpe\raklib\RakLibInterface`
- The following classes have been removed:
  - `mcpe\PlayerNetworkSessionAdapter`
- The following methods have been renamed:
  - `UPnP::PortForward()` -> `UPnP::portForward()`
  - `UPnP::RemovePortForward()` -> `UPnP::removePortForward()`
- The following methods have changed signatures:
  - `UPnP::portForward()` now accepts `string $serviceURL, string $internalIP, int $internalPort, int $externalPort`.
  - `UPnP::removePortForward()` now accepts `string $serviceURL, int $externalPort`.
- The following methods have been removed:
  - `NetworkInterface->putPacket()`
  - `NetworkInterface->close()`
  - `NetworkInterface->emergencyShutdown()`
- `NetworkInterface` now represents a more generic interface to be implemented by any network component, as opposed to specifically a player network interface.
- Everything under the `rcon` subnamespace has been removed.
- `upnp\UPnP` has significant changes. It's now a network component instead of a pair of static methods.

### Permission
- The following new permission nodes have been introduced:
  - `pocketmine.group.everyone`: granted to everyone by default
  - `pocketmine.group.operator`: granted to operator players and the console
  These permission nodes can be assigned and overridden by permission attachments just like any other, which means it's now possible to grant **temporary operator** status which goes away when the player disconnects (or the attachment is removed).
- Permissions are now always false if they haven't been set explictly, or granted implicitly by another permission.
- Undefined permissions are now always `false` instead of following the value of `Permission::$DEFAULT_PERMISSION`.
- Permissions internally no longer have default values. Instead, they are now assigned as a child of one of the `pocketmine.group` permissions:
  - `true`: add as child to `pocketmine.group.everyone` with value `true`
  - `false`: do not add to any permission
  - `op`: add as child to `pocketmine.group.operator` with value `true`
  - `notop`: add as child to `pocketmine.group.everyone` with value `true`, and to `pocketmine.group.operator` with value `false`
  However, the `default` key in `plugin.yml` permission definitions continues to be supported.
- Added `PermissibleDelegateTrait` to reduce boilerplate for users of `PermissibleBase`. This trait is used by `ConsoleCommandSender` and `Player`.
- The following API methods have been moved:
  - `Permission::getByName()` -> `PermissionParser::defaultFromString()`
  - `Permission::loadPermissions()` -> `PermissionParser::loadPermissions()`
  - `Permission::loadPermission()` -> `PermissionParser::loadPermission()`
- The following constants have been moved:
  - `Permission::DEFAULT_FALSE` -> `PermissionParser::DEFAULT_FALSE`
  - `Permission::DEFAULT_TRUE` -> `PermissionParser::DEFAULT_TRUE`
  - `Permission::DEFAULT_OP` -> `PermissionParser::DEFAULT_OP`
  - `Permission::DEFAULT_NOT_OP` -> `PermissionParser::DEFAULT_NOT_OP`
- The following API methods have been added:
  - `Permission->addChild()`
  - `Permission->removeChild()`
  - `Permissible->getPermissionRecalculationCallbacks()` - allows reacting to changes of permissions, such as new permissions being granted or denied
  - `Permissible->setBasePermission()` - used for assigning root permissions like `pocketmine.group.operator`; plugins usually shouldn't use this
  - `Permissible->unsetBasePermission()`
  - `PermissionAttachmentInfo->getGroupPermissionInfo()` - returns the `PermissionAttachmentInfo` of the permission that caused the current permission value to be set, or null if the permission is explicit
- The following API methods have been removed:
  - `Permissible->isOp()`: use `Permissible->hasPermission(DefaultPermissions::ROOT_OPERATOR)` instead, **but you really shouldn't directly depend on a player's op status, add your own permissions instead!**
  - `Permissible->setOp()`: use `addAttachment($plugin, DefaultPermissions::ROOT_OPERATOR, true)` instead to add, and `removeAttachment()` to remove it (or addAttachment() with false to explicitly deny it, just like any other permission)
  - `Permission->addParent()`
  - `Permission->getDefault()`
  - `Permission->setDefault()`
  - `PermissionManager->getDefaultPermissions()`
  - `PermissionManager->recalculatePermissionDefaults()`
  - `PermissionManager->subscribeToDefaultPerms()`
  - `PermissionManager->unsubscribeFromDefaultPerms()`
  - `PermissionManager->getDefaultPermSubscriptions()`
  - `PermissionAttachment->getPermissible()`
  - `PermissionAttachmentInfo->getPermissible()`
- The following fields have been removed:
  - `Permission::$DEFAULT_PERMISSION`
- The following API methods have changes:
  - `PermissionParser::defaultFromString()` now throws `InvalidArgumentException` on unknown values.
  - `Permission->__construct()` no longer accepts a `$defaultValue` parameter (see notes above about defaults refactor).you should add your permission as a child of `pocketmine.group.everyone` or `pocketmine.group.operator` instead).
- The following classes have been removed:
  - `ServerOperator`

### Player
- The following classes have been added/moved to the new `pocketmine\player` namespace:
  - `Achievement`
  - `GameMode`
  - `IPlayer`
  - `OfflinePlayer`
  - `PlayerInfo`
  - `Player`
  - `SurvivalBlockBreakHandler`: handles cracking animation, sounds and particles when mining a block in creative
  - `UsedChunkStatus`: enum used internally by the chunk sending system
- The following constants have been removed:
  - `Player::SURVIVAL` - use `GameMode::SURVIVAL()`
  - `Player::CREATIVE` - use `GameMode::CREATIVE()`
  - `Player::ADVENTURE` - use `GameMode::ADVENTURE()`
  - `Player::SPECTATOR` - use `GameMode::SPECTATOR()`
  - `Player::VIEW` - use `GameMode::SPECTATOR()`
- (almost) all packet handlers have been removed from `Player`. They are now encapsulated within the network layer.
- `Player->getSpawn()` no longer returns the world's safe spawn if the player's spawn position isn't set. Returning the safe spawn at the time of call made no sense, because it might not have been safe when actually used. You should pass the result of this function to `World->getSafeSpawn()` to get a safe spawn position instead.
- The following API methods have been added:
  - `Player->attackBlock()`: attack (left click) the target block, e.g. to start destroying it (survival)
  - `Player->attackEntity()`: melee-attack (left click) the target entity (if within range)
  - `Player->breakBlock()`: destroy the target block in the current world (immediately)
  - `Player->consumeHeldItem()`: consume the previously activated item, e.g. eating food
  - `Player->continueBreakBlock()`: punch the target block during destruction in survival, advancing break animation and creating particles
  - `Player->getCurrentWindow()`: returns the inventory window the player is currently viewing, or null if they aren't viewing an inventory
  - `Player->getItemCooldownExpiry()`: returns the tick on which the player's cooldown for a given item expires
  - `Player->getLowerCaseName()`: use `strtolower(Player->getName())` instead
  - `Player->getPlayerInfo()`: returns a `PlayerInfo` object containing various metadata about the player
  - `Player->getSaveData()`: returns save data generated on the fly
  - `Player->hasFiniteResources()`
  - `Player->interactBlock()`: interact (right click) the target block in the current world
  - `Player->interactEntity()`: interact (right click) the target entity, e.g. to apply a nametag (not implemented yet)
  - `Player->pickBlock()`: picks (mousewheel click) the target block in the current world
  - `Player->releaseHeldItem()`: release the previously activated item, e.g. shooting a bow
  - `Player->removeCurrentWindow()`: removes the inventory window the player is currently viewing, if any
  - `Player->selectHotbarSlot()`: select the specified hotbar slot
  - `Player->setCurrentWindow()`: sets the inventory the player is currently viewing
  - `Player->stopBreakBlock()`: cease attacking a previously attacked block
  - `Player->toggleFlight()`: tries to start / stop flying (fires events, may be cancelled)
  - `Player->updateNextPosition()`: sets the player's next attempted move location (fires events, may be cancelled)
  - `Player->useHeldItem()`: activate the held item, e.g. throwing a snowball
- The following API methods have been removed:
  - `IPlayer->isBanned()`: this was unreliable because it only checked name bans and didn't account for plugin custom ban systems. Use `Server->getNameBans()->isBanned()` and `Server->getIPBans()->isBanned()` instead.
  - `IPlayer->isOp()`: use `Server` APIs instead
  - `IPlayer->isWhitelisted()`: use `Server->isWhitelisted()` instead
  - `IPlayer->setBanned()`: use `Server` APIs instead
  - `IPlayer->setOp()`: use `Server` APIs instead
  - `IPlayer->setWhitelisted()`: use `Server->setWhitelisted()` instead
  - `Player->addActionBarMessage()`: replaced by `sendActionBarMessage()`
  - `Player->addSubTitle()`: replaced by `sendSubTitle()`
  - `Player->addTitle()`: replaced by `sendTitle()`
  - `Player->addWindow()`: use `Player->setCurrentWindow()` instead
  - `Player->dataPacket()`: replaced by `NetworkSession->sendDataPacket()`
  - `Player->getAddress()`: replaced by `NetworkSession->getIp()`
  - `Player->getClientId()`: the client ID can be found in `PlayerInfo->getExtraData()`
  - `Player->getPing()`: moved to `NetworkSession`
  - `Player->getPort()`: moved to `NetworkSession`
  - `Player->getWindow()`: use `Player->getCurrentWindow()` instead
  - `Player->getWindowId()`
  - `Player->removeAllWindows()`
  - `Player->removeWindow()`: use `Player->removeCurrentWindow()` instead
  - `Player->sendDataPacket()`: replaced by `NetworkSession->sendDataPacket()`
  - `Player->setCraftingGrid()`: crafting tables now work the same way as other containers; use `Player->setCurrentWindow()`
  - `Player->updateNextPosition()`: use `Player->handleMovement()` instead
  - `Player->updatePing()`: moved to `NetworkSession`

### Plugin
- API version checks are now more strict. It is no longer legal to declare multiple minimum versions on the same major version. Doing so will now cause the plugin to fail to load with the message `Multiple minimum API versions found for some major versions`.
- `plugin.yml` YAML commands loading is now internalized inside `PluginBase`.
- `PluginManager->registerEvent()` now has a simpler signature: `registerEvent(string $event, \Closure $handler, int $priority, Plugin $plugin, bool $handleCancelled = false)`. The provided closure must accept the specified event class as its only parameter. See [Event API changes](#event) for more details.
- The following classes have been added:
  - `PluginOwned`
- The following classes have been removed:
  - `PluginLogger`
- The following constants have been removed:
  - `PluginLoadOrder::STARTUP` - use `PluginEnableOrder::STARTUP()` 
  - `PluginLoadOrder::POSTWORLD` - use `PluginEnableOrder::POSTWORLD()`
- The following interface requirements have been removed:
  - `Plugin->onEnable()`: this is now internalized inside `PluginBase`
  - `Plugin->onDisable()`: same as above
  - `Plugin->onLoad()`: same as above
  - `Plugin->getServer()` is no longer required to be implemented. It's implemented in `PluginBase` for convenience.
  - `Plugin->isDisabled()` was removed (use `Plugin->isEnabled()` instead).
  - `Plugin` no longer extends `CommandExecutor`. This means that `Plugin` implementations don't need to implement `onCommand()` anymore.
- The following hook methods have changed visibility:
  - `PluginBase->onEnable()` changed from `public` to `protected`
  - `PluginBase->onDisable()` changed from `public` to `protected`
  - `PluginBase->onLoad()` changed from `public` to `protected`
- The following hook methods have been renamed:
  - `Plugin->setEnabled()` -> `Plugin->onEnableStateChange()`. This change was made to force plugin developers misusing this hook to stop, and to give it a name that better describes what it does.
- The following API methods have been removed:
  - `PluginManager->addPermission()`: use `PermissionManager` instead
  - `PluginManager->callEvent()`: use `Event->call()` instead
  - `PluginManager->getDefaultPermSubscriptions()`: use `PermissionManager` instead
  - `PluginManager->getDefaultPermissions()`: use `PermissionManager` instead
  - `PluginManager->getPermission()`: use `PermissionManager` instead
  - `PluginManager->getPermissionSubscriptions()`: use `PermissionManager` instead
  - `PluginManager->getPermissions()`: use `PermissionManager` instead
  - `PluginManager->loadPlugin()`: use `PluginManager->loadPlugins()` instead
  - `PluginManager->recalculatePermissionDefaults()`: use `PermissionManager` instead
  - `PluginManager->removePermission()`: use `PermissionManager` instead
  - `PluginManager->subscribeToDefaultPerms()`: use `PermissionManager` instead
  - `PluginManager->subscribeToPermission()`: use `PermissionManager` instead
  - `PluginManager->unsubscribeFromDefaultPerms()`: use `PermissionManager` instead
  - `PluginManager->unsubscribeFromPermission()`: use `PermissionManager` instead
- The following API methods have changed behaviour:
  - `PluginManager->loadPlugins()` now accepts paths to files as well as directories, in which case it will load only the plugin found in the target file.
- It is no longer permitted to throw exceptions from `PluginBase->onEnable()` or `PluginBase->onLoad()`. Doing so will now cause the server to crash.

### Promise
A very basic in-house implementation of Promises has been added. This is currently used for handling world generation requests.

- `PromiseResolver` is created by the creator of the task. The task should call `PromiseResolver->resolve()` when the result is ready.
- `Promise` can be obtained by using `PromiseResolver->getPromise()` and should be returned to API consumers.

Please note that this was not written with plugins in mind and its API may change in a future version.

### Scheduler
#### Thread-local storage for AsyncTasks
- TLS has been completely rewritten in this release to be self contained, more robust and easier to use.
- Now behaves more like simple properties. `storeLocal()` writes, `fetchLocal()` reads.
- Self-contained and doesn't depend on the async pool to clean up after it.
- Values are automatically removed from storage when the `AsyncTask` is garbage-collected, just like a regular property.
- Supports storing multiple values, differentiated by string names.
- `fetchLocal()` can now be used multiple times. It no longer deletes the stored value.
- The following classes have been removed:
  - `FileWriteTask`
- The following methods have been removed:
  - `AsyncTask->peekLocal()`: use `fetchLocal()` instead
- The following methods have signature changes:
  - `AsyncTask->storeLocal()` now has the signature `storeLocal(string $key, mixed $complexData) : void`
  - `AsyncTask->fetchLocal()` now has the signature `fetchLocal(string $key) : mixed`

#### Other AsyncTask changes
- `AsyncPool` uses a new, significantly more performant algorithm for task collection.
- `BulkCurlTask` has had the `$complexData` constructor parameter removed.
- `BulkCurlTask->__construct()` now accepts `BulkCurlTaskOperation[]` instead of `mixed[]`.
- `pocketmine\Collectable` has been removed, and is no longer extended by `AsyncTask`.
- The following hooks have been added:
  - `AsyncTask->onError()`: called on the main thread when an uncontrolled error was detected in the async task, such as a memory failure
- The following hooks have signature changes:
  - `AsyncTask->onCompletion()` no longer accepts a `Server` parameter, and has a `void` return type.
  - `AsyncTask->onProgressUpdate()` no longer accepts a `Server` parameter, and has a `void` return type.
- The following API methods have been removed:
  - `AsyncTask->getFromThreadStore()`: use `AsyncTask->worker->getFromThreadStore()`
  - `AsyncTask->removeFromThreadStore()`: use `AsyncTask->worker->removeFromThreadStore()`
  - `AsyncTask->saveToThreadStore()`: use `AsyncTask->worker->saveToThreadStore()`

#### Non-AsyncTask changes
- Added `CancelTaskException`, which can be thrown from `Task->onRun()` to cancel a task (especially useful for `ClosureTask`).
- The `$currentTick` parameter of `Task->onRun()` has been removed (use `Server->getTick()` instead if needed).
- Callables given to `ClosureTask` are no longer required to declare a `void` typehint (useful for arrow functions).

### Server
- New chat broadcasting APIs have been implemented, which don't depend on the permission system.
  - The following API methods have been added:
    - `Server->subscribeToBroadcastChannel()` - allows subscribing a `CommandSender` to receive chat messages (and other message types) on any channel
    - `Server->unsubscribeFromBroadcastChannel()`
    - `Server->unsubscribeFromAllBroadcastChannels()`
    - `Server->getBroadcastChannelSubscribers()`
  - Giving `Player` any `pocketmine.broadcast.*` permissions will cause them to automatically subscribe to the corresponding broadcast channel (and removing them will unsubscribe it).
  - It's now possible to create and subscribe to custom broadcast channels without using permissions.
  - However, `Player`s may automatically unsubscribe themselves from the builtin broadcast channels if they don't have the proper permissions.
  - Automatic subscribe/unsubscribe from custom broadcast channels can be implemented using the new `Permissible` permission recalculation callbacks API.
- The following API methods have been added:
  - `Server->getIpV6()`
  - `Server->getPortV6()`
- The following API methods have been removed:
  - `Server->reloadWhitelist()`
  - `Server->getLevelMetadata()`
  - `Server->getPlayerMetadata()`
  - `Server->getEntityMetadata()`
  - `Server->getDefaultGamemode()`
  - `Server->getLoggedInPlayers()`
  - `Server->onPlayerLogout()`
  - `Server->addPlayer()`
  - `Server->removePlayer()`
  - `Server->reload()`
  - `Server->getSpawnRadius()`
  - `Server->enablePlugin()`
  - `Server->disablePlugin()`
  - `Server->getGamemodeString()` - replaced by `pocketmine\player\GameMode->getTranslationKey()`
  - `Server->getGamemodeName()` - replaced by `pocketmine\player\GameMode->name()`
  - `Server->getGamemodeFromString()` - replaced by `GameMode::fromString()`
  - `Server->broadcast()` - use `Server->broadcastMessage()` instead
- The following API methods have changed:
  - `Server->getOfflinePlayerData()` no longer creates data when it doesn't exist.
- The following API methods have been renamed:
  - `Server->getPlayer()` -> `Server->getPlayerByPrefix()` (consider using `Server->getPlayerExact()` instead where possible)

### Level / World
#### General
- All references to `Level` in the context of "world" have been changed to `World`.
  - The `pocketmine\level` namespace has been renamed to `pocketmine\world`
  - All classes containing the world `Level` in the name in the "world" context have been changed to `World`.
  - `Position->getLevel()` has been renamed to `Position->getWorld()`, and `Position->level` has been renamed to `Position->world`.
- Extracted a `WorldManager` unit from `Server`
  - `Server->findEntity()` -> `WorldManager->findEntity()`
  - `Server->generateLevel()` -> `WorldManager->generateWorld()`
  - `Server->getAutoSave()` -> `WorldManager->getAutoSave()`
  - `Server->getDefaultLevel()` -> `WorldManager->getDefaultWorld()`
  - `Server->getLevel()` -> `WorldManager->getWorld()`
  - `Server->getLevelByName()` -> `WorldManager->getWorldByName()`
  - `Server->getLevels()` -> `WorldManager->getWorlds()`
  - `Server->isLevelGenerated()` -> `WorldManager->isWorldGenerated()`
  - `Server->isLevelLoaded()` -> `WorldManager->isWorldLoaded()`
  - `Server->loadLevel()` -> `WorldManager->loadWorld()`
    - `WorldManager->loadWorld()` may convert worlds if requested (the `$autoUpgrade` parameter must be provided).
  - `Server->setAutoSave()` -> `WorldManager->setAutoSave()`
  - `Server->setDefaultLevel()` -> `WorldManager->setDefaultWorld()`
  - `Server->unloadLevel()` -> `WorldManager->unloadWorld()`
- The following static classes have been un-static-ified and converted to singletons (use `Whatever::getInstance()->method()` instead of `Whatever::method()`):
  - `GeneratorManager`
  - `WorldProviderManager`
- The following classes have been added:
  - `BlockTransaction`: allows creating batch commits of block changes with validation conditions - if any block can't be applied, the whole transaction fails to apply.
  - `ChunkListenerNoOpTrait`: contains default no-op stubs for chunk listener implementations
  - `ChunkListener`: interface allowing subscribing to events happening on a given chunk
  - `ChunkLockId`: used by `World->lockChunk()` and `World->unlockChunk()`
  - `TickingChunkLoader`: a `ChunkLoader` specialization that allows ticking chunks
  - `format\io\FastChunkSerializer`: provides methods to encode a chunk for transmitting to another thread
  - `WorldCreationOptions`: used for passing world generator options to `WorldManager->generateWorld()`
- `ChunkLoader` no longer requires implementing `getX()` and `getZ()`.
- `ChunkLoader` no longer causes chunks to get random updates. If this behaviour is needed, implement `TickingChunkLoader`.
- The following classes have been renamed:
  - `pocketmine\world\utils\SubChunkIteratorManager` -> `pocketmine\world\utils\SubChunkExplorer`
- The following class constants have been added:
  - `Chunk::COORD_BIT_SIZE`
  - `Chunk::COORD_MASK`
  - `Chunk::DIRTY_FLAG_BLOCKS`
  - `Chunk::DIRTY_FLAG_TERRAIN`
  - `Chunk::EDGE_LENGTH`
  - `SubChunk::COORD_BIT_SIZE`
  - `SubChunk::COORD_MASK`
  - `SubChunk::EDGE_LENGTH`
  - `World::Y_MIN`
- The following API methods have been added:
  - `WorldManager->getAutoSaveTicks()`
  - `WorldManager->setAutoSaveTicks()`
  - `World->notifyNeighbourBlockUpdate()`
  - `World->registerChunkListener()`
  - `World->unregisterChunkListener()`
  - `World->getBlockAt()` (accepts int x/y/z instead of Vector3, faster for some use cases)
  - `World->setBlockAt()` (accepts int x/y/z instead of Vector3, faster for some use cases)
  - `Chunk->isDirty()` (replacement for `Chunk->hasChanged()`)
  - `Chunk->getDirtyFlag()` (more granular component-based chunk dirty-flagging, used to avoid saving unmodified parts of the chunk)
  - `Chunk->setDirty()`
  - `Chunk->setDirtyFlag()`
- The following API methods have been removed from the public API:
  - `Chunk->addEntity()`
  - `Chunk->fastSerialize()` (use `FastChunkSerializer::serializeTerrain()` instead)
  - `Chunk->getBlockData()`
  - `Chunk->getBlockDataColumn()`
  - `Chunk->getBlockId()`
  - `Chunk->getBlockIdColumn()`
  - `Chunk->getBlockLight()`
  - `Chunk->getBlockLightColumn()`
  - `Chunk->getBlockSkyLight()`
  - `Chunk->getBlockSkyLightColumn()`
  - `Chunk->getEntities()`
  - `Chunk->getMaxY()`
  - `Chunk->getSavableEntities()`
  - `Chunk->getSubChunkSendCount()` (this was specialized for protocol usage)
  - `Chunk->getX()`
  - `Chunk->getZ()`
  - `Chunk->hasChanged()` (use `Chunk->isDirty()` or `Chunk->getDirtyFlag()` instead)
  - `Chunk->isGenerated()`
  - `Chunk->networkSerialize()` (see `ChunkSerializer` in the `network\mcpe\serializer` package)
  - `Chunk->populateSkyLight()` (use `SkyLightUpdate->recalculateChunk()` instead)
  - `Chunk->recalculateHeightMap()` (moved to `SkyLightUpdate`)
  - `Chunk->recalculateHeightMapColumn()` (moved to `SkyLightUpdate`)
  - `Chunk->removeEntity()`
  - `Chunk->setAllBlockLight()`
  - `Chunk->setAllBlockSkyLight()`
  - `Chunk->setBlock()`
  - `Chunk->setBlockData()`
  - `Chunk->setBlockId()`
  - `Chunk->setBlockLight()`
  - `Chunk->setBlockSkyLight()`
  - `Chunk->setChanged()` (use `Chunk->setDirty()` or `Chunk->setDirtyFlag()` instead)
  - `Chunk->setGenerated()`
  - `Chunk->setX()`
  - `Chunk->setZ()`
  - `Chunk::fastDeserialize()` (use `FastChunkSerializer::deserializeTerrain()` instead)
  - `ChunkLoader->getLevel()`
  - `ChunkLoader->getLoaderId()` (now object ID is used)
  - `ChunkLoader->getPosition()`
  - `ChunkLoader->isLoaderActive()`
  - `World->addChunkPacket()`
  - `World->addGlobalPacket()`
  - `World->broadcastGlobalPacket()`
  - `World->broadcastLevelEvent()`
  - `World->broadcastLevelSoundEvent()`
  - `World->checkSpawnProtection()`
  - `World->generateChunkCallback()`
  - `World->getBlockDataAt()`
  - `World->getBlockIdAt()`
  - `World->getBlockSkyLightAt()` (use `World->getRealBlockSkyLightAt()` or `World->getPotentialBlockSkyLightAt()`, depending on use-case)
  - `World->getChunkTiles()`
  - `World->getFullBlock()`
  - `World->getHeightMap()` (misleading name, only actually useful for sky light calculation - you probably want `getHighestBlockAt()` instead)
  - `World->getTickRate()`
  - `World->getTileById()`
  - `World->isFullBlock()`
  - `World->isFullBlock()` (use `Block->isFullCube()` instead)
  - `World->sendBlocks()`
  - `World->sendTime()`
  - `World->setBlockDataAt()`
  - `World->setBlockIdAt()`
  - `World->setBlockLightAt()`
  - `World->setBlockSkyLightAt()`
  - `World->setHeightMap()` (misleading name, only actually useful for sky light calculation)
  - `World->setTickRate()`
  - `World->updateBlockLight()`
  - `World->updateSkyLight()`
  - `World::generateChunkLoaderId()`
- The following API methods have changed signatures:
  - `Chunk->__construct()` now has the signature `array<int, SubChunk> $subChunks, BiomeArray $biomeIds, bool $terrainPopulated`.
  - `Chunk->getSubChunk()` now returns `SubChunk` instead of `SubChunkInterface|null` (and throws `InvalidArgumentException` on out-of-bounds coordinates).
  - `Chunk->getSubChunks()` now returns `array<int, SubChunk>` instead of `SplFixedArray<SubChunk>`.
  - `Chunk->setSubChunk()` no longer accepts `SubChunkInterface`, and the `$allowEmpty` parameter has been removed.
  - `ChunkManager->setChunk()` (and its notable implementations in `World` and `SimpleChunkManager`) no longer accepts NULL for the `$chunk` parameter.
  - `GeneratorManager->registerGenerator()` now requires a `\Closure $presetValidator` parameter. This is used to check generator options of worlds and configs before attempting to use them.
  - `Position->__construct()` now requires the `$world` parameter (it's no longer optional). 
  - `World->addParticle()` now has the signature `addParticle(Vector3 $pos, Particle $particle, ?Player[] $players = null) : void`
  - `World->addRandomTickedBlock()` now accepts `Block` instead of `int, int`.
  - `World->addSound()` now has the signature `addSound(?Vector3 $pos, Sound $sound, ?Player[] $players = null) : void`
  - `World->getChunk()` no longer accepts a `$create` parameter.
  - `World->getRandomTickedBlocks()` now returns `bool[]` instead of `SplFixedArray`.
  - `World->loadChunk()` now returns `?Chunk`, and the `$create` parameter has been removed.
  - `World->removeRandomTickedBlock()` now accepts `Block` instead of `int, int`.
  - `World->setBlock()` has had the `$direct` parameter removed.
  - `World->setChunks()` no longer accepts a `$deleteEntitiesAndTiles` parameter.
  - `World->updateAllLight()` now accepts `int, int, int` instead of `Vector3`.
  - `WorldManager->generateWorld()` (previously `Server->generateWorld()`) now accepts `WorldCreationOptions` instead of `int $seed, class-string<Generator> $generator, mixed[] $options`
  - `World->lockChunk()` now requires `ChunkLockId $lockId` parameter.
  - `World->unlockChunk()` now requires a `?ChunkLockId $lockId` parameter. If a non-null lockID is given, the lock on the chunk will only be removed if it matches the given lockID.
  - `World->unlockChunk()` now returns `bool` instead of `void` (to signal whether unlocking succeded or not).
- The following API methods have been renamed / moved:
  - `World->getChunks()` -> `World->getLoadedChunks()`
  - `World->getCollisionCubes()` -> `World->getCollisionBoxes()`
  - `World->getName()` -> `World->getDisplayName()`
  - `World->populateChunk()` has been split into `World->requestChunkPopulation()` and `World->orderChunkPopulation()`.
- The following API methods have changed behaviour:
  - `World->getAdjacentChunks()` now returns an array indexed using `World::chunkHash()`, where the `x` and `z` components are the relative offsets from the target chunk (range -1 to +1).
  - `World->getChunk()` no longer tries to load chunks from disk. If the chunk is not already in memory, null is returned. (This behaviour now properly matches other `ChunkManager` implementations.)
  - `World->getHighestBlockAt()` now returns `null` instead of `-1` if the target X/Z column contains no blocks.
  - The following methods now throw `WorldException` when targeting ungenerated terrain:
    - `World->getSafeSpawn()` (previously it just silently returned the input position)
    - `World->getHighestBlockAt()` (previously it returned -1)
  - `World->loadChunk()` no longer creates an empty chunk when the target chunk doesn't exist on disk.
  - `World->setChunk()` has the following behavioural changes:
    - Now fires `ChunkLoadEvent` and `ChunkListener->onChunkLoaded()` when replacing a chunk that didn't previously exist.
    - Now updates entities in the replaced chunk and its neighbours. This fixes bugs such as paintings not dropping and dropped items floating in midair if the ground was lower than before.
    - Entities are no longer deleted on chunk replacement.
    - Tiles are no longer deleted on chunk replacement, unless one of the following conditions is met:
      - the target block in the new chunk doesn't expect a tile
      - the target block in the new chunk expects a different type of tile (responsibility of the plugin developer to create the new tile)
      - there's already a tile in the target chunk which conflicts with the old one
  - `World->useBreakOn()` now returns `false` when the target position is in an ungenerated or unloaded chunk (or chunk locked for generation).
  - `World->useItemOn()` now returns `false` when the target position is in an ungenerated or unloaded chunk (or chunk locked for generation).
- A `ChunkListener` interface has been extracted from `ChunkLoader`. The following methods have been moved:
  - `ChunkLoader->onBlockChanged()` -> `ChunkListener->onBlockChanged()`
  - `ChunkLoader->onChunkChanged()` -> `ChunkListener->onChunkChanged()`
  - `ChunkLoader->onChunkLoaded()` -> `ChunkListener->onChunkLoaded()`
  - `ChunkLoader->onChunkPopulated()` -> `ChunkListener->onChunkPopulated()`
  - `ChunkLoader->onChunkUnloaded()` -> `ChunkListener->onChunkUnloaded()`
- `Location` has been moved to `pocketmine\entity\Location`.

#### Particles
- `DestroyBlockParticle` has been renamed to `BlockBreakParticle` for consistency.
- `DustParticle->__construct()` now accepts a `pocketmine\color\Color` object instead of `r, g, b, a`.
- `pocketmine\world\particle\Particle` no longer extends `pocketmine\math\Vector3`, and has been converted to an interface.
- Added the following `Particle` classes:
  - `DragonEggTeleportParticle`
  - `PunchBlockParticle`

#### Sounds
- `pocketmine\world\sound\Sound` no longer extends `pocketmine\math\Vector3`, and has been converted to an interface.
- `Sound->encode()` now accepts `pocketmine\math\Vector3`.
- Added the following classes:
  - `ArrowHitSound`
  - `BlockBreakSound`
  - `BlockPlaceSound`
  - `BowShootSound`
  - `BucketEmptyLavaSound`
  - `BucketEmptyWaterSound`
  - `BucketFillLavaSound`
  - `BucketFillWaterSound`
  - `ChestCloseSound`
  - `ChestOpenSound`
  - `EnderChestCloseSound`
  - `EnderChestOpenSound`
  - `ExplodeSound`
  - `FlintSteelSound`
  - `ItemBreakSound`
  - `NoteInstrument`
  - `NoteSound`
  - `PaintingPlaceSound`
  - `PotionSplashSound`
  - `RedstonePowerOffSound`
  - `RedstonePowerOnSound`
  - `ThrowSound`
  - `XpCollectSound`
  - `XpLevelUpSound`

### Utils
- The `Color` class was removed. It's now found as `pocketmine\color\Color` in the [`pocketmine/color`](https://github.com/pmmp/Color) package.
- The `UUID` class was removed. [`ramsey/uuid`](https://github.com/ramsey/uuid) version 4.1 is now used instead.
  - `UUID::fromData()` can be replaced by `Ramsey\Uuid\Uuid::uuid3()`
  - `UUID::fromRandom()` can be replaced by `Ramsey\Uuid\Uuid::uuid4()`
  - `UUID::fromBinary()` can be replaced by `Ramsey\Uuid\Uuid::fromBytes()` (use `Ramsey\Uuid\Uuid::isValid()` to check validity)
  - `UUID::toBinary()` is replaced by `Ramsey\Uuid\UuidInterface::getBytes()`
  - See the [documentation for `ramsey/uuid`](https://uuid.ramsey.dev/en/latest/introduction.html) for more information.
- `Terminal::hasFormattingCodes()` no longer auto-detects the availability of formatting codes. Instead it's necessary to use `Terminal::init()` with no parameters to initialize, or `true` or `false` to override.
- `Config->save()` no longer catches exceptions thrown during emitting to disk.
- The following new classes have been added:
  - `InternetException`
  - `Internet`
  - `Process`
- The following API methods have been added:
  - `Config->getPath()`: returns the path to the config on disk
  - `Config::parseList()`: parses a list of entries like `ops.txt` into an array
  - `Config::parseProperties()`: parses a properties file like `server.properties` into an array
  - `Config::writeList()`
  - `Config::writeProperties()`
  - `Terminal::write()`: emits a Minecraft-formatted text line without newline
  - `Terminal::writeLine()`: emits a Minecraft-formatted text line with newline
  - `Utils::recursiveUnlink()`: recursively deletes a directory and its contents
- The following API class constants have been added:
  - `TextFormat::COLORS`: lists all known color codes
  - `TextFormat::FORMATS`: lists all known formatting codes (e.g. italic, bold). (`RESET` is not included because it _removes_ formats, rather than adding them.)
- The following deprecated API redirects have been removed:
  - `Utils::execute()`: moved to `Process`
  - `Utils::getIP()`: moved to `Internet`
  - `Utils::getMemoryUsage()`: moved to `Process`
  - `Utils::getRealMemoryUsage()`: moved to `Process`
  - `Utils::getThreadCount()`: moved to `Process`
  - `Utils::getURL()`: moved to `Internet`
  - `Utils::kill()`: moved to `Process`
  - `Utils::postURL()`: moved to `Internet`
  - `Utils::simpleCurl()`: moved to `Internet`
- The following API fields have been removed / hidden:
  - `Utils::$ip`
  - `Utils::$online`
  - `Utils::$os`
- The following API methods have signature changes:
  - `Internet::simpleCurl()` now requires a `Closure` for its `onSuccess` parameter instead of `callable`.
  - `Process::kill()` now requires an additional `bool $subprocesses` parameter.
- The following API methods have behavioural changes:
  - `Utils::parseDocComment()` now allows `-` in tag names.
- The following API methods have been removed:
  - `TextFormat::toJSON()`
  - `Utils::getCallableIdentifier()`
- `MainLogger` now pushes log messages to `server.log` before calling logger attachments. This fixes messages not being written to disk when an uncaught error is thrown from a logger attachment.

## Gameplay
### World loading
- Chunks are now sent in proper circles. This improves the experience when flying quickly parallel to X or Z axis, since now more chunks in front of the player will load sooner.
- Many bugs in player respawning have been fixed, including:
  - Spawning underneath bedrock when spawn position referred to ungenerated terrain
  - Spawning underneath bedrock on first server join on very slow machines (or when the machine was under very high load)
  - Spawning inside blocks (or above the ground) when respawning with a custom spawn position set
  - Player spawn positions sticking to the old location when world spawn position changed - this was because the world spawn at time of player creation was used as the player's custom spawn, so the bug will persist for older player data, but will work as expected for new players.

### Blocks
- Implemented the following blocks:
  - bamboo
  - bamboo sapling
  - barrel
  - barrier
  - blast furnace
  - blue ice
  - carved pumpkin
  - coral block
  - daylight sensor
  - dried kelp
  - elements (from Minecraft: Education Edition)
  - hard (stained and unstained) glass (from Minecraft: Education Edition)
  - hard (stained and unstained) glass pane (from Minecraft: Education Edition)
  - jukebox
  - note block
  - red, green, blue and purple torches (from Minecraft: Education Edition)
  - sea pickle
  - slime
  - smoker
  - underwater torches (from Minecraft: Education Edition)
  - additional wood variants of the following:
    - buttons
    - pressure plates
    - signs
    - trapdoors
  - stairs of the following materials:
    - andesite (smooth and natural)
    - diorite (smooth and natural)
    - end stone
    - end stone brick
    - granite (smooth and natural)
    - mossy cobblestone
    - prismarine (natural, dark and bricks)
    - red nether brick
    - red sandstone (and variants)
  - stone-like slabs of many variants
- Non-player entities now bounce when falling on beds.
- Players and mobs now receive reduced fall damage when falling on beds.
- Fixed cake block desync when attempting to eat in creative (eating in creative is not yet supported, but the block rollback was missing).
- Fixed the bounding box of skulls when mounted on a wall.
- Fixed podzol dropping itself when mined (instead of dirt).

### Items
- Implemented the following items:
  - records
  - compounds (from Minecraft: Education Edition)
  - black, brown, blue and white dyes
- Compasses now point to the correct (current) world's spawn point after teleporting players to a different world. Previously, they would continue to point to the spawn of the world that the player initially spawned in.

### Inventory
- Implemented offhand inventory.
- Block-picking is now supported in survival mode.
- Block picking behaviour now matches vanilla (no longer overwrites held item, jumps to existing item where possible).
- Armor can now be equipped by right-clicking while holding it.
- Picking up some items from a dropped stack of items is now supported. This fixes various bugs with being unable to pick up items with an almost-full inventory.
- Fixed arrows getting added to creative players' inventories when picked up.

### Misc
- Added support for emotes.

# 4.0.1
Released 9th December 2021.

## General
- Added a script `tools/ping-server.php`. This was sitting in my workspace for many years.
- `Minecraft network interface running` messages are no longer shown if RakLib was prevented from starting.

## Fixes
### Core
- Fixed server crash when `FallingBlock` has invalid block data that it can't understand.
- Fixed server crash when loading chunks containing tiles outside the world bounds.
- Fixed server crash when loading LevelDB chunks containing blockstates which are invalid or not yet supported - they are now treated as corrupted instead.
- Fixed `level.dat` becoming corrupted by world saves when the disk is full - now it will still fail to save, but it will leave the original data intact. Previously it would destroy the data and leave behind an empty file.
- Fixed configs becoming corrupted when saved when the disk is full - now they'll still fail to save, but the original file will remain intact.

### API
- Fixed mistakes in the 4.0.0 changelog:
  - Removal of `Player->getLowerCaseName()` is now mentioned.
  - `CreativeInventory::reset()` is the successor to `Item::initCreativeItems()`, not `CreativeInventory::init()`.
  - Note that the changelog when viewing from the 4.0.0 GitHub release will remain the same; only the changelog in the current repo will be different.
- `Config->save()` will no longer write empty data to the file when using JSON and the data fails to encode - an exception will be thrown instead.
- `StringToItemParser` now returns the correct items for `bamboo`, `shulker_box`, `stone_slab`, `stone_stairs` and `tall_grass`.
- `StringToItemParser` now recognizes `slime` and `slime_block` (these were previously missing).

# 4.0.2
Released 12th December 2021.

## Fixes
### Core
- Fixed server crash when loading written books containing pages with invalid UTF-8 characters - the invalid characters are now scrubbed.
- Fixed server crash when root type of `plugin.yml` is valid, but not an array.
- Fixed ConsoleReader crash due OPcache ASLR issue - it's not clear what caused this, but OPcache is not needed in the subprocess anyway.
- Fixed backslashes getting stripped from unquoted command arguments - these were only supposed to be stripped from quoted arguments, to allow escaping of quotes.
- `build/generate-known-translation-apis.php` now sorts numerically-indexed arguments into ascending order, irrespective of the order they appear in the original string.

### API
- `KnownTranslationKeys` and `KnownTranslationFactory` are now marked `@internal`.
- `ItemEntity` now clones the itemstack passed to its constructor, fixing various confusing mutability issues.
- `PlayerExperienceChangeEvent->setNewProgress()` now performs range checks. This fixes the root of a very old and confusing crash bug which took several years to identify the cause of.
  - Note that the defective plugin(s) which caused this problem will still cause a server crash, but the plugin responsible will now get blamed correctly.
- `GeneratorManager->addGenerator()` now consistently converts the given alias to lowercase. Due to a bug, it previously didn't do this if the `$overwrite` parameter was set to `true`, causing a range of confusing bugs.

# 4.0.3
Released 16th December 2021.

## Fixes
- Fixed `/dumpmemory` crashing when encountering uninitialized typed properties.
- Fixed all chunks containing furnaces being treated as corrupted in worlds older than 2017.
  - This was caused by a strict corruption check detecting bad data created by a bug in PocketMine-MP that was fixed in 2017.
- Fixed player arm swing animation not being shown when attacks were cancelled by attack cooldown.
- Fixed being unable to use `/deop` to de-op a player whose name appeared in `ops.txt` with uppercase letters in it.
- Added a check for valid tile class in `BlockIdentifier`.

# 4.0.4
Released 1st January 2022.

## General
- Improved performance of loading chests and other containers from world saves.
- Improved performance of loading player inventories from saved data.

## Fixes
- Fixed a crash that could occur when a chunk failed to be prepared for chunk sending.
- Fixed fall damage when sprinting down stairs.
- Fixed message length limit for chat (now 512 instead of 255, and accounts for UTF-8).
- Fixed incorrect message being displayed when trying to sleep in a bed which is too far away.
- Fixed missing space between `Kicked by admin.` and `Reason` when using `/kick` to kick a player.
- Fixed client-side performance issue of entities with very large scale.

# 4.0.5
Released 4th January 2022.

## Fixes
- Fixed several denial-of-service attack vectors related to writable book text length and encoding.
- Fixed several denial-of-service attack vectors related to skin data field lengths.
- Fixed food bar desync when cancelling `PlayerItemConsumeEvent` in a plugin.
- Fixed compass needles not updating when the world spawn is changed.

# 4.0.6
Released 13th January 2022.

## Fixes
- Fixed server crash on invalid facing values provided by the client when placing or breaking blocks.
- Fixed documentation link to AsyncTask in Worker.

# 4.0.7
Released 21st January 2022.

## General
- Max nesting of form responses is now limited to 2.
- Updated outdated documentation of `PlayerInteractEvent`.

## Fixes
- Fixed server crash on invalid JSON provided by the client in `ModalFormResponsePacket`.
- Fixed ender pearls teleporting players when thrown by a player directly against a wall when cancelling `ProjectileLaunchEvent`.
- Fixed collision box of brewing stand.
- Fixed break times and tool types of bamboo, nether wart blocks, infested stone and leaves.

# 4.0.8
Released 25th January 2022.

## Fixes
- Fixed ender chest not dropping itself when mined with a Silk Touch pickaxe.
- The correct amount of fall damage is now taken when falling from a height onto hay bales.

# 4.0.9
Released 5th February 2022.

## Fixes
### Core
- The spawn chunk of the default world is no longer loaded during shutdown. Previously, it would attempt to find a safe spawn to teleport players to, only to unload the target world of that safe spawn and not use it.
- The spawn chunk of the default world is no longer loaded when unloading a non-default world containing zero players.
- Fixed chunk version `8` in Bedrock worlds being treated as corrupted. These appeared in worlds between 1.2.13 and 1.8.0.

### API
- Added missing bounds check to `Liquid->setDecay()`.
- Fixed `StringToItemParser` returning concrete instead of concrete powder when given `<color>_concrete_powder`.

### Gameplay
- Cobwebs now drop themselves when broken using shears.
- Fixed spectator players being able to drop items.
- Fixed collision shapes of Bell in different orientations.

**For Minecraft: Bedrock Edition 1.18.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.1.0
Released 7th February 2022.

## General
- Game mode names (e.g. `survival`, `creative`) may now be used for the `gamemode` property in `server.properties`.
- Increased default maximum render distance to 16 chunks. Players with a render distance smaller than this will notice no difference.
- The setup wizard now prompts for a maximum render distance value.
- The setup wizard now prompts for an IPv6 port selection. Previously it would always use 19133.
- `chunk-ticking.disable-block-ticking` now accepts block names like those used in the `/give` command.
- The `/clear` command now behaves more like vanilla:
  - The order of inventories is now the same as Bedrock.
  - The cursor and offhand inventories are now cleared if necessary.

## Technical
- `PlayerAuthInputPacket` is now used instead of `MovePlayerPacket` for processing movements. This improves position and rotation accuracy.
- `&&` and `||` are now always used instead of `and` and `or`.
- New version of `pocketmine/errorhandler` is used by this version, adding support for `ErrorToExceptionHandler::trap()`. This enables reliably capturing `E_WARNING` and `E_NOTICE` from functions such as `yaml_parse()` and friends.
- New dependency versions are required by this version:
  - `pocketmine/bedrock-protocol` has been updated from 7.1.0 to [7.3.0](https://github.com/pmmp/BedrockProtocol/releases/tag/7.3.0%2Bbedrock-1.18.0).
  - `pocketmine/errorhandler` has been updated from 0.3.0 to [0.6.0](https://github.com/pmmp/ErrorHandler/releases/tag/0.6.0).

## API
### Block
- The following classes have been added:
  - `Lectern`
  - `Pumpkin`
- The following public API methods have been added:
  - `Block->getTypeId() : int` - returns an integer which uniquely identifies the block type, ignoring things like facing, colour etc.
  - `VanillaBlocks::LECTERN()`
  - `utils\BrewingStandSlot->getSlotNumber() : int`
  - `utils\FurnaceType->getCookSound() : Sound`
- The following API constants have been added:
  - `tile\BrewingStand::BREW_TIME_TICKS`

### Crafting
- The following API methods have been added:
  - `CraftingManager->getPotionContainerChangeRecipes() : array<int, array<string, PotionContainerChangeRecipe>>`
  - `CraftingManager->getPotionTypeRecipes() : array<string, array<string, PotionTypeRecipe>>`
  - `CraftingManager->registerPotionContainerChangeRecipe(PotionContainerChangeRecipe $recipe) : void`
  - `CraftingManager->registerPotionTypeRecipe(PotionTypeRecipe $recipe) : void`
- The following classes have been added:
  - `BrewingRecipe`
  - `PotionContainerChangeRecipe`
  - `PotionTypeRecipe`

### Entity
- The following classes have been added:
  - `animation\ItemEntityStackSizeChangeAnimation`
- The following public API methods have been added:
  - `object\ItemEntity->isMergeable(object\ItemEntity $other) : bool`
  - `object\ItemEntity->setStackSize(int $size) : void`
  - `object\ItemEntity->tryMergeInto(object\ItemEntity $other) : bool`
  - `ExperienceManager->canAttractXpOrbs() : bool`
  - `ExperienceManager->setCanAttractXpOrbs(bool $v = true) : void`
  - `Entity->getSize() : EntitySizeInfo`
  - `Living->isGliding() : bool`
  - `Living->isSwimming() : bool`
  - `Living->setGliding(bool $value = true) : void`
  - `Living->setSwimming(bool $value = true) : void`
- The following protected API methods have been added:
  - `Entity->getBlocksIntersected(float $inset) : \Generator<int, Block, void, void>`

### Event
- `BlockSpreadEvent` is now called when fire spreads to the positions of blocks it burns away.
- `BlockFormEvent` is now called when concrete powder turns into concrete due to contact with water.
- The following classes have been added:
  - `BlockMeltEvent` - called when ice or snow melts
  - `BrewItemEvent` - called when a brewing stand finishes brewing potions; this is called up to 3 times (once for each brewing slot, as needed)
  - `BrewingFuelUseEvent` - called when a brewing stand consumes blaze powder
  - `ChestPairEvent` - called when two chests try to form a pair
  - `PlayerToggleGlideEvent` - called when a player starts or stops gliding
  - `PlayerToggleSwimEvent` - called when a player starts or stops swimming
  - `PlayerViewDistanceChangeEvent` - called whenever a player alters their render distance or requests one for the first time when connecting

### Item
- The following public API methods have been added:
  - `SplashPotion->getType() : PotionType`
  - `VanillaItems::AIR()`
- The following API methods have been deprecated:
  - `ItemFactory::air()` - use `VanillaItems::AIR()` instead

### Player
- The following public API methods have been added:
  - `Player->hasBlockCollision() : bool`
  - `Player->setHasBlockCollision(bool $value)` - allows controlling spectator-like no-clip behaviour without changing game mode
  - `Player->toggleSwim(bool $swim) : bool` - called by the network system when the client tries to start/stop swimming
  - `Player->toggleGlide(bool $glide) : bool` - called by the network system when the client tries to start/stop gliding

### Server
- The following public API constants have been added:
  - `Server::DEFAULT_SERVER_NAME`
  - `Server::DEFAULT_MAX_PLAYERS`
  - `Server::DEFAULT_PORT_IPV4`
  - `Server::DEFAULT_PORT_IPV6`
  - `Server::DEFAULT_MAX_VIEW_DISTANCE`

### Utils
- Config parsing errors are now always represented by `ConfigLoadException` and include the path to the file in the message.
- Added `TextFormat::MINECOIN_GOLD`, and support for it to the various `TextFormat` methods.
- The following public API methods have been added:
  - `Utils::assumeNotFalse()` - static analysis crutch to silence PHPStan errors without using `ignoreErrors` or `@phpstan-ignore-line`, which are both too coarse.
- The following public API properties have been added:
  - `Terminal::$COLOR_MINECOIN_GOLD`
- The following classes have been added:
  - `ConfigLoadException`
- Fixed `Random->nextSignedInt()` to actually return a signed int. Previously it would return any integer value between 0 and 4,294,957,295.
- Fixed `Random->nextSignedFloat()` to return a float between `-1.0` and `1.0`. Previously it would return any value between `0.0` and `2.0`.
- `VersionString->getNumber()` output is now structured differently to fix overflow issues caused by the old format.

### World
- The following classes have been added:
  - `sound\BlastFurnaceSound` - the sound made by a blast furnace during smelting
  - `sound\FurnaceSound` - the sound made by a regular furnace during cooking or smelting
  - `sound\ItemUseOnBlockSound`
  - `sound\LecternPlaceBookSound`
  - `sound\PotionFinishBrewingSound` - the sound made by a brewing stand when a potion finishes being brewed
  - `sound\SmokerSound` - the sound made by a smoker during cooking

## Gameplay
### Blocks
- Fire now spreads.
- Implemented lectern blocks.
- Added missing sounds for hoeing grass and dirt.
- Added missing sounds for using a shovel on grass to create grass path.
- Pumpkins can now be carved using shears.
- Brewing stands can now be used for brewing potions.
- The visual appearance of a brewing stand now updates correctly when the contents of its inventory changes (adding/removing potions).
- Added missing sounds for furnace, blast furnace and smoker.
- Fixed ender chest not dropping itself when mined with a Silk Touch pickaxe.
- Cobwebs now drop themselves when mined using shears.
- The correct amount of fall damage is now taken when falling from a height onto hay bales.

### Items
- Dropped items of the same type now merge with each other.

**For Minecraft: Bedrock Edition 1.18.10**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.2.0
- Added support for Minecraft: Bedrock Edition 1.18.10.

# 4.2.1
Released 19th February 2022.

## General
- Improved performance of `Item::nbtSerialize()` - this will improve performance during world saves.
- Added more missing changes to the 4.0.0 changelog.

## Fixes
- Fixed multiple players being able to sleep in the same bed.
- Fixed hitbox not resetting properly after swimming or gliding.

# 4.2.2
Released 2nd March 2022.

## Fixes
- Fixed crash in `/dumpmemory` due to usage of non-printable string keys in `CraftingManager`. Array contents in memory dumps are now rendered as prettified key-value pairs.
- Fixed output directory for `/dumpmemory`.
- `PlayerInventory->isHotbarSlot()` now correctly returns `false` when given `9`.
- Fixed ghost items left in the inventory when dropping tools while mining.

# 4.2.3
Released 9th March 2022.

## Technical
- Now analysed using PHPStan 1.4.8.
- Now using `pocketmine/bedrock-protocol` [`8.0.1`](https://github.com/pmmp/BedrockProtocol/releases/tag/8.0.1%2Bbedrock-1.18.10).

## Fixes
### Core
- Fixed a memory leak and other bugs related to plugins disabling themselves during `onEnable()`.

### Gameplay
- Sweet berry bushes now absorb fall damage.
- Fixed mycelium spreading onto coarse dirt.
- Fixed blocks placed during `Block->onIncinerate()` getting overwritten.
- Fixed shulker boxes being unopenable when underwater.
- Fixed invisible fire on top of transparent non-flammable blocks.

### API
- Various APIs accepting `Vector3`, `Position` or `Location` no longer accept objects containing `INF` or `NaN` in any component. Previously, this was allowed, but would cause lots of obscure crashes later on.
- `Entity->setRotation()` no longer accepts `INF` or `NaN`.
- Fixed missing bounds check for `ItemFrame->setItemDropChance()`.

# 4.2.4
Released 18th March 2022.

## Fixes
- Fixed a crash when handling out-of-bounds meta values on the network.

# 4.2.5
Released 28th March 2022.

## General
- The layout of the human-readable part of crashdumps has been changed in an effort to improve the useful information density. It is hoped that this change will cause more useful information to be provided when people paste crash traces on Discord, since all the most important information is now at the top of the file.
  - Version, git hash, PHP version and OS have been moved to the top of the crashdump.
  - Backtrace has been moved above code sample.
- Docker images are now built by GitHub Actions (first live test).

## Technical
- The methods of `Inventory` and `BaseInventory` have been rearranged to improve coherency.

## Fixes
### API
- Enum members of enums created using `EnumTrait` are now able to have single-character names.
- Registry members of registries created using `RegistryTrait` or `CloningRegistryTrait` now have their names checked for invalid characters.
- `Entity::__construct()` now uses a guard variable to prevent it from being called multiple times unintentionally. This is necessary because `Entity::__construct()` has side effects.
- Fixed `PlayerItemHeldEvent` not being called when the content of the held slot was changed (e.g. replacing the held item via inventory menu).

### Gameplay
- Reduced the appearance of ghost items in unsupported gameplay scenarios using client prediction information. This fixes, for example, the appearance of ghost items when right-clicking on a filled flower pot.

# 4.2.6
Released 1st April 2022.

## Fixes
- Fixed buffer length underflow crash in `LoginPacket` handling.

# 4.2.7
Released 15th April 2022.

## General
- Added lots more documentation (in comments) about the `aliases` section in `pocketmine.yml`. You can read about this feature in the `aliases` section of the [updated `pocketmine.yml` template](/resources/pocketmine.yml).
- Improved wording of documentation of `PlayerPreLoginEvent`.

## Fixes
- Fixed core server crash when a plugin causes another plugin to be disabled during a scheduled task.
- Fixed core server crash when loading a plugin with an abstract main class.
- Fixed ghost items in many interaction situations (most notably, using projectiles while looking at an entity or block).
- Implemented a workaround for a client teleport bug which led to player positions not updating properly when using ender pearls.
- Fixed buggy movement when teleporting the player during `PlayerToggleSneakEvent`, `PlayerToggleSprintEvent`, `PlayerToggleSwimEvent` and `PlayerToggleGlideEvent`.

# 4.2.8
Released 17th April 2022.

## Fixes
- Fixed a memory leak in RakLib which could result in a server crash when players stay online for a long time.
- Fixed server crash when attempting to load a corrupted empty resource pack.
- Fixed users with the same name with differerently cased letters being able to duplicate items (userdata is matched by case-insensitive name).

# 4.2.9
Released 19th April 2022.

## Fixes
- Fixed several potential crashes when deserializing item NBT (due to insufficient validation of input data).

# 4.2.10
Released 20th April 2022.

## Fixes
- Fixed performance issue when chat messages received from the client contain many newlines. This security vulnerability was disclosed publicly necessitating a priority fix.

**For Minecraft: Bedrock Edition 1.18.30**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.3.0
Released 20th April 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.18.30.
- Removed support for older versions.

# 4.3.1
Released 23rd April 2022.

## Fixes
- Updated BedrockProtocol dependency to fix incorrect command argument types.
- Creative players no longer die in the void.

# 4.3.2
Released 10th May 2022.

## Fixes
- Fixed an assertion failure in certain edge cases during world generation.
- Fixed `Entity::setNameTagVisible()` not immediately showing results to players already online.

## Documentation
- Added more documentation in the template `pocketmine.yml` for the `aliases` config section.
- Removed useless doc comment in `PlayerChangeSkinEvent`.

# 4.3.3
Released 16th May 2022.

## General
- Improved display of parameters in exception stack trace logs.
- Exception stack traces now include names for dynamic named arguments (i.e. arguments that don't match any parameter of the function), if any were given.
  - Note: Named arguments which do match parameters are not shown this way, since PHP reduces them to positional arguments for performance reasons.

## Fixes
- Fixed server crash when chunks are unloaded during chunk generation callbacks
- Fixed dead coral fan items placing coral fans in the wrong orientation.
- Fixed max stack size of boat items.

# 4.3.4
Released 22nd May 2022.

## Fixes
- Fixed `difficulty` in `server.properties` having no effect - it's now applied to newly generated worlds.
  - Note: this setting still doesn't behave the same way as vanilla due to potential disruption to existing servers.
- Fixed paintings not working in newly generated worlds and some other cases.
- Fixed inventory window switching breaking the inventory UI in some cases (e.g. pressing E while clicking a chest).
- Fixed minecart items incorrectly stacking.
- Fixed incorrect light levels in translucent blocks at the top of the world.
- Fixed teleporting sleeping players causing broken behaviour on the sleeping player's client.
- Fixed `EntityExplodeEvent->setYield()` accepting values outside the range 0-100.
- Fixed `ExplosionPrimeEvent->setForce()` accepting negative values (later resulting in crashes).

## Documentation
- Updated documentation for the following events:
  - `CommandEvent`
  - `EntityDespawnEvent`
  - `EntityExplodeEvent`
  - `EntitySpawnEvent`
  - `ExplosionPrimeEvent`
  - `InventoryTransactionEvent`
  - `ItemDespawnEvent`
  - `ItemSpawnEvent`
  - `PlayerCommandPreprocessEvent`
  - `PlayerDropItemEvent`
  - `PlayerItemHeldEvent`
  - `PlayerKickEvent`
  - `PlayerQuitEvent`
  - `PlayerTransferEvent`
  - `UpdateNotifyEvent`

**For Minecraft: Bedrock Edition 1.18.30**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.4.0
Released 1st June 2022.

## General
- The server will now shut itself down if any of the following errors occur during startup:
  - Any plugin fails to load or enable (plugins loaded by other plugins post-startup are **not** affected by this change) (**PR [#4951](https://github.com/pmmp/PocketMine-MP/pull/4951)**)
    - The motivation for this change is to prevent situations where plugins failing to load could result in adverse outcomes, such as a world protection plugin leaving a lobby unprotected from griefing.
    - If you encounter this problem, remove the offending plugin(s) or prevent it from loading using `plugin_list.yml`.
    - See **PR [#4951](https://github.com/pmmp/PocketMine-MP/pull/4951)** for more detail on this change.
  - Any world mentioned in `server.properties` or `pocketmine.yml` fails to load (worlds loaded by plugins are **not** affected by this change)
  - Any world mentioned in `server.properties` or `pocketmine.yml` fails to generate (e.g. due to invalid generator settings)
- Enabling the server whitelist while the server is running (e.g. using `/whitelist on`) will now kick any non-whitelisted players currently on the server (**PR [#4774](https://github.com/pmmp/PocketMine-MP/pull/4774)**).
- Help for commands (`/help <name of command>`) now displays a list of aliases of that command.
- A CRITICAL log message is now generated if a plugin disables itself when enabling, in case the plugin doesn't emit any error of its own.
- The `/give` command now shows the alias used to find the given item in the success message, instead of the item ID/meta.

## Fixes
- Block placement has been fixed in many places where it previously didn't work correctly (**PR [#4886](https://github.com/pmmp/PocketMine-MP/pull/4886)**):
  - torches on top of slabs, upside-down stairs
  - torches on the back face of stairs
  - flower pots on top of fences
  - the list goes on and on ...
- Fixed backslash escapes not getting properly removed from commands in some cases.
- Fixed aliases defined in the `aliases` section of `pocketmine.yml` not being treated as quote-aware.

## Gameplay
- Plants in flower pots can now be removed by right-clicking on the flower pot.
- Leaves now have a 2% chance of dropping sticks when destroyed by hand (**PR [#5019](https://github.com/pmmp/PocketMine-MP/pull/5019)**).
- Food exhaustion now matches Bedrock 1.18.30 (**PR [#5034](https://github.com/pmmp/PocketMine-MP/pull/5034)**).
- Implemented Stonecutter block (**PR [#4732](https://github.com/pmmp/PocketMine-MP/pull/4732)**).

## API
### Block
- Added `Block->getSupportType(Facing) : SupportType` (**PR [#4886](https://github.com/pmmp/PocketMine-MP/pull/4886)**).
  - This is used to determine the kind of support a block face can provide to a block (e.g. a torch) placed on it.
- Added `utils\SupportType` enum (**PR [#4886](https://github.com/pmmp/PocketMine-MP/pull/4886)**).
- `tile\Spawnable->isDirty()` and `tile\Spawnable->setDirty()` are now `@deprecated`.

### Command
- Added `CommandStringHelper::parseQuoteAware()`. This static method contains the code used by `SimpleCommandMap` used to parse quoted command arguments.

### Entity
- Added `Human::emote()` (**PR [#4610](https://github.com/pmmp/PocketMine-MP/pull/4610)**)

### Event
- `PlayerCommandPreprocessEvent` is now `@deprecated`, since its functionality is entirely replaced by other, general-purpose events.
  - Use `CommandEvent` to intercept commands.
  - Use `PlayerChatEvent` to intercept chat messages.
  - To convert a chat message into a command, pass it directly to `Server->dispatchCommand()` with the player as sender.
- Added `PlayerPostChunkSendEvent` (**PR [#4937](https://github.com/pmmp/PocketMine-MP/pull/4937)**).
- Added `PlayerDeathEvent->setKeepXp()` (**PR [#4015](https://github.com/pmmp/PocketMine-MP/pull/4015)**).
- `InventoryCloseEvent` is now called **after** the target window has been removed. This fixes various feedback loops caused by trying to open new windows to a player while there was one still active.
  - As a side effect, this now means that `Player->getCurrentWindow()` will return `null` during `InventoryCloseEvent`. Use `InventoryCloseEvent->getInventory()` instead.

### Item
- `StringToItemParser` now recognizes `cod`, `raw_cod` and `cooked_cod` aliases.

### Plugin
- `DisablePluginException` may now be thrown from `Plugin::onEnable()` to make the server gracefully disable the plugin (without crashing) (**PR [#4780](https://github.com/pmmp/PocketMine-MP/pull/4780)**).
- `PluginManager->registerEvent()` now returns the `RegisteredListener` created for the handler, to permit unregistering it later.

## Internals
- Private property declarations now use typed properties (PHP 7.4) and promoted constructor properties (PHP 8.0) wherever possible.
  - Protected and public properties remain unchanged, since they can't be changed without breaking subclasses.
- Promoted constructor properties are only used when it's consistently possible to promote most or all properties in a class.
- Simplified and improved legibility of `FormattedCommandAlias`.
- Added unit tests for the quote-aware command parser used by `SimpleCommandMap`.
- Various hardcoded values in `block` package classes have been moved to private constants to improve readability.
- Added various constants used in the `LevelDB` world provider.

# 4.4.1
Released 5th June 2022.

## General
- The server process will now exit with an error code if plugins, worlds or network interfaces failed to start.

## Fixes
- Fixed graylisted plugins preventing the server from starting.
- Fixed `composer make-devtools` command.
- Fixed the `Maximum memory (manager)` units being incorrectly displayed in `/status`.
- Fixed `Player->removeCurrentWindow()` breaking inventory windows.

# 4.4.2
Released 7th June 2022.

## Fixes
- Fixed a crash when arbitrary item IDs appeared in network items in some cases.
- Fixed saved paintings being deleted when loaded from disk (regression from 4.3.4).
- Fixed max stack size of fishing rods.

**For Minecraft: Bedrock Edition 1.19.0**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.5.0
Released 7th June 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.0.
- Removed support for older versions.

# 4.5.1
Released 8th June 2022.

## Fixes
- Fixed commands defined in `pocketmine.yml` `aliases` not passing the correct arguments.
- Updated BedrockProtocol to fix command argument types displayed on client-side command suggestions.

# 4.5.2
Released 29th June 2022.

## Fixes
- Fixed terrain getting redrawn when flying in spectator mode (or when using `Player->setHasBlockCollision(false)`).
- Fixed skulls with the `noDrops` flag set being treated as unknown blocks.

**For Minecraft: Bedrock Edition 1.19.10**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.6.0
Released 13th July 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.10.
- Removed support for older versions.

# 4.6.1
Released 22nd July 2022.

## Tools
- `build/generate-registry-annotations.php` now supports processing single files (useful for PhpStorm file watchers).

## API
- Updated documentation for `AsyncTask`.

## Fixes
- Fixed incorrect items being displayed in item frames.
- Fixed books not showing in lecterns.
- Fixed incorrect damage interval of Wither status effect.
- Fixed incorrect fire ticks when being set on fire by lava (8 seconds in Bedrock instead of 15).
- `Entity->attack()` now cancels damage from `FIRE` and `FIRE_TICK` damage causes if the entity is fireproof.
- Fixed inventory windows getting force-closed when the client attempts to use an enchanting table or anvil.

# 4.6.2
Released 6th August 2022.

## Core
- Improved server-side performance of `PlayerAuthInputPacket` handler.
- Improved client-side performance of `FloatingTextParticle` by using an invisible falling block entity. This offered a roughly 5x performance improvement over using tiny invisible players in local testing.

## Fixes
- Fixed assert failures and debug spam on debug Minecraft clients related to abilities in `AddPlayerPacket`.
- Fixed crash in `ReversePriorityQueue` on PHP 8.1 by adding `#[ReturnTypeWillChange]` attribute.

**For Minecraft: Bedrock Edition 1.19.20**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.7.0
Released 9th August 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.20.
- Removed support for older versions.

# 4.7.1
Released 14th August 2022.

## Fixes
- Fixed server crash when loading items from disk which have negative meta values.
- Fixed Turtle Master potions not giving any effects.
- Unimplemented items are no longer craftable.
- Fixed incorrect items appearing in item frames (due to an obsolete workaround for 1.19.10).

# 4.7.2
Released 16th August 2022.

## Fixes
- Fixed crash when processing player skins with invalid geometry data.
- Fixed spectator players being able to pick blocks using mousewheel click.
- Improved supporting requirements for sugarcane.

# 4.7.3
Released 22nd August 2022.

## General
- Added complete translations for Spanish and Vietnamese.
- All continuous integration (static analysis, unit tests, integration tests) are now performed on PHP 8.1 as well as 8.0.
- InventoryTransaction now verifies that stack sizes of items after the transaction don't exceed the maximum stack size of the item type or the containing inventory.

## Fixes
- Fixed Normal generator crash on PHP 8.1.
- Fixed a race condition during async worker shutdown that could lead to tasks executing in the wrong order. This (very rarely) led to a crash in `PopulationTask` due to its preceding `GeneratorRegisterTask` not being executed.
- Fixed `/give` accepting negative amounts or amounts larger than 32767 (vanilla max).
- Fixed placement conditions for vines (no longer able to be placed on the side of cacti).
- Fixed incorrect documentation of `SignText::__construct()`.

**For Minecraft: Bedrock Edition 1.19.21**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.8.0
Released 24th August 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.21.
- Removed support for older versions.

# 4.8.1
Released 26th August 2022.

## General
- Crashdumps now include JIT mode information for use by the Crash Archive.

## Fixes
- Fixed uninitialized offset error in `DyeColorIdMap` when given invalid dye color IDs.

**For Minecraft: Bedrock Edition 1.19.30**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.9.0
Released 20th September 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.30.
- Removed support for older versions.

# 4.9.1
Released 11th October 2022.

## Documentation
- Added and improved documentation for many API methods in `Player` and `Block`.
- Added missing `@internal` tag for `TaskHandler->setNextRun()`, `TaskHandler->remove()` and `TaskHandler->run()`.

## Fixes
- Flight state is now locked by the server in spectator mode. This prevents any attempt by the client to toggle flight mode.
- Fixed entity health exceeding its max health after the expiry of Health Boost effect.
- Fixed burp sound not being played when a player eats food.
- Fixed placement conditions for mushrooms - they can now only be placed when the light level at the target is <= 12, or on podzol or mycelium.
- Fixed sign text appearing to change colour and/or glow when using dye on a sign - since this feature is not yet implemented, no change should occur.
- Fixed players drowning when sprint-swimming on the surface of water.

## Internals
- Added more detailed debug logging during the player login sequence.
- Silenced debug spam during `PreSpawnPacketHandler`, considerably reducing debug noise when players join.
- Fixed an edge case in `InventoryManager->removeWindow()`. This bug didn't have any effect on stable versions, but caused a `next-minor` development version to crash.
- `Item`s returned by event getters are now cloned if modifying the result will have no useful side effects.
- Updated `pocketmine/bedrock-data` to [`1.11.1`](https://github.com/pmmp/BedrockData/tree/1.11.1%2Bbedrock-1.19.30), which reduces bandwidth consumption during logins by not sending useless biome generation data.

**For Minecraft: Bedrock Edition 1.19.40**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.10.0
Released 26th October 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.40.
- Removed support for older versions.

## Fixes
- Fixed incorrect command descriptions showing in `/help` when multiple commands use the same name. Previously, the most recently registered command would show, even though it wouldn't actually be invoked.
- Fixed splash potions affecting players in spectator mode.
- Fixed `World->addParticle()` sending particles to players who couldn't possibly see them when a list of targets was used.
- Fixed `World->addSound()` sending sounds to players who couldn't possibly hear them when a list of targets was used.

## Documentation
- Improved type information available for various API methods in `World`.

# 4.10.1
Released 7th November 2022.

## Fixes
- Fixed spawning in the void if spawn terrain in a world is solid at the default spawn position.
- Fixed totems of undying activating when the player has 1 HP remaining.
- Fixed durable items such as tools becoming unbreakable when in stacks larger than 1. Now, the durability correctly resets when the tool breaks.
- TPS below 12 now correctly shows as red in `/status`. Previously, it showed as orange due to a condition ordering bug.
- Improved handling of missing arguments in user-defined `pocketmine.yml` command aliases. Previously, missing arguments would be filled with an empty string, which caused a variety of unexpected behaviour.

## Internals
- Added validation for the array given to `BaseInventory->setContents()` to ensure that it contains only `Item` instances.
- Silenced `PlayerAuthInputPacket` spam when the session is in the "spawn response" state.
- Updated to PHPStan 1.9.

# 4.10.2
Released 25th November 2022.

## Fixes
- Fixed crashes on macOS and Linux when using console colours without the `TERM` environment variable set.
- Fixed crashdumps not being generated when error messages contained invalid UTF-8 characters.

## Documentation
- Clarified documentation of caching behaviour for `Internet::getIP()`.
- Added and improved documentation for many `Inventory` methods.
- Rewritten documentation for `PlayerCreationEvent` with warnings and more detail.

## Internals
- Non-arrow projectile damage is now unscaled. Scaling according to velocity is only applied to arrows. This currently doesn't cause any observable change in behaviour, but is required for future additions.

**For Minecraft: Bedrock Edition 1.19.40**

This is a minor feature release for PocketMine-MP, introducing some new features and improvements.

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.11.0
Released 25th November 2022.

## General
- Packet receive timings have now been split into two subcategories - Decode and Handle.
- Console command entry can now be disabled via the `console.enable-input` setting in `pocketmine.yml`.
  - Best suited for headless servers (e.g. in a Docker container) where the console will never be used anyway.
  - Disabling the console reader slightly reduces memory usage, because console reading currently requires an additional subprocess.
- Console command output now appears on the terminal only, and is not written to the log file.
- The output from console commands now appears with a `Command output |` prefix, instead of as a log message.
- User-defined `pocketmine.yml` custom commands now use a generic description which makes clear the command is config-defined.
- Introduced validation for the `--data` and `--plugins` command line options.
- Encrypted resource packs are now supported, by means of adding a `.key` file alongside the pack in the `resource_packs` folder.
  - e.g. `MyEncryptedPack.zip` -> `MyEncryptedPack.zip.key`
  - The file must contain the raw key bytes, and must not end with a newline.

## Configuration
- The `chunk-ticking.per-tick` setting is now deprecated, and will be removed in a future release.
  - The functionality of this setting has been removed, since it caused more problems than it solved.
  - Setting it to zero will still disable chunk ticking (for now), but this should now be done by setting `chunk-ticking.tick-radius` to `0` instead.

## Gameplay
- Fixed supporting blocks of dead bush to be in line with vanilla.
- Sugarcane can now be grown using bonemeal on any part of the sugarcane. Previously, it only worked when used on the bottom block.
- Fixed missing sounds when adding, rotating, or removing items in item frames.
- Fixed modifier values for Instant Damage and Regeneration effects.
- Implemented Darkness effect.
- Improved chunk random ticking:
  - Removed the limit on chunks ticked per tick, and its associated config option is no longer respected.
    - This change significantly improves crop and plant growth with large numbers of players.
    - This limit was causing a linear decrease in chunk ticking speed with larger numbers of players, leading to worsened gameplay experience.
    - **Warning: This change will result in increased CPU usage if players are spread over a very large area.**
  - Every chunk within the configured tick radius of a player will be ticked. Previously, chunks were randomly selected from the radius.

## API
### General
- Plugins are now always disabled before their dependencies, to ensure that they are able to shutdown properly (e.g. a core plugin depending on a database plugin may want to save data to a DB during `onDisable()`).
- [`webmozart/path-util`](https://packagist.org/packages/webmozart/path-util) has been deprecated, and will be dropped in favour of [`symfony/filesystem`](https://packagist.org/packages/symfony/filesystem) in PM5.
    - To prepare for this change, simply replace any usage of `Webmozart\PathUtil\Path` with `Symfony\Component\Filesystem\Path`, which is available as a dependency in this release.

### `pocketmine`
- The following API methods are now deprecated:
  - `Server->getPlayerByPrefix()`

### `pocketmine\entity`
- `EntitySpawnEvent` and `ItemSpawnEvent` are now fired on the first tick after the entity is added to the world. Previously, these events were called directly from the entity constructor, making it impossible to get properties like velocity which are often set after the entity is created.
- The following API methods are now deprecated:
  - `Living->hasLineOfSight()`

### `pocketmine\event\block`
- The following new classes have been added:
  - `BlockDeathEvent` - event called when coral or coral blocks die due to lack of water

### `pocketmine\item`
- The following new API methods have been added:
  - `public Armor->clearCustomColor() : $this`

### `pocketmine\inventory\transaction`
- Introduced a `TransactionBuilder` class. This makes it less of a hassle to build an `InventoryTransaction` server-side, since the regular `Inventory` API methods can be used, rather than having to manually create `SlotChangeAction`s.

### `pocketmine\lang`
- The following new API methods have been added:
  - `public Language->getAll() : array<string, string>`

### `pocketmine\player`
- The following new API methods have been added:
  - `public Player->sendToastNotification(string $title, string $body) : void` - makes a grey box appear at the top of the player's screen containing the specified message

### `pocketmine\utils`
- The following new API methods have been added:
  - `public static TextFormat::addBase(string $baseFormat, string $string) : string` - used for coloured log messages, changes the base formatting of a string by inserting the given formatting codes after every RESET code

### `pocketmine\world`
- The following new API methods have been added:
  - `public World->getChunkTickRadius() : int` - returns the world's simulation radius
  - `public World->setChunkTickRadius(int $radius) : void` - sets the world's simulation radius

### `pocketmine\world\sound`
- The following new classes have been added:
  - `ItemFrameAddItemSound`
  - `ItemFrameRemoveItemSound`
  - `ItemFrameRotateItemSound`

## Internals
- Improved performance of `ContainerTrait` dropping items on block destroy. ([link](https://github.com/pmmp/PocketMine-MP/commits/24e72ec109c1442b09558df89b6833cf2f2e0ec7))
- Avoid repeated calls to `Position->getWorld()` (use local variables). ([link](https://github.com/pmmp/PocketMine-MP/commit/2940547026db40ce76deb46e992870de3ead79ad))
- Revamped the way `InventoryManager` handles fake inventory slot mappings for stuff like crafting tables. ([link](https://github.com/pmmp/PocketMine-MP/commit/e90abecf38d9c57635fa0497514bba7e546a2469))
  - Inventories are now mapped on a per-slot basis. This means that more than one inventory can be mapped to the same window ID, which is necessary for correctly handling "UI" inventories like crafting tables.
  - `InventoryManager->getWindow(int $windowId) : ?Inventory` is replaced by `locateWindowAndSlot` (see below).
  - Added `InventoryManager->locateWindowAndSlot(int $windowId, int $netSlotId) : array{Inventory, int}` - accepts a window ID and absolute slot ID, and returns the associated inventory and the slot relative to the inventory's own start (for use with `getItem()` etc.).
  - Slot offset mapping for "UI" inventories is now handled in `InventoryManager->createComplexSlotMapping()` instead of in `TypeConverter`.
- Console polling is now done on the main thread (no longer a performance concern). ([link](https://github.com/pmmp/PocketMine-MP/commit/b3f03d7ae645de67a54b7300c09b94eeca16298e))
- Console reader subprocess should now automatically die if the server main process is killed, instead of persisting as a zombie. ([link](https://github.com/pmmp/PocketMine-MP/commit/2585160ca2c4df5758b8b980331307402ff9f0fb))
- `ConsoleCommandSender` is no longer responsible for relaying broadcast messages to `MainLogger`. A new `BroadcastLoggerForwarder` has been added, which is subscribed to the appropriate server broadcast channels in order to relay messages. This ensures that chat messages and command audit messages are logged. ([link](https://github.com/pmmp/PocketMine-MP/commit/83e5b0adb6fa0dddec377182bb1c7945ac8f7820))
- `DelegateInventory` now uses `WeakReference` to track its inventory listener. This allows the delegate to be reused. ([link](https://github.com/pmmp/PocketMine-MP/commit/3feaa18f6c10c3a99c0deca75f57ec2d74b92ab4))
- Non-arrow projectile damage is now unscaled. Scaling according to velocity is only applied to arrows. This currently doesn't cause any observable change in behaviour, but is required for future additions.

**For Minecraft: Bedrock Edition 1.19.50**

### Note about API versions
Plugins which don't touch the protocol and compatible with any previous 4.x.y version will also run on these releases and do not need API bumps.
Plugin developers should **only** update their required API to this version if you need the changes in this build.

**WARNING: If your plugin uses the protocol, you're not shielded by API change constraints.** You should consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you do.

# 4.12.0
Released 30th November 2022.

## General
- Added support for Minecraft: Bedrock Edition 1.19.50.
- Removed support for older versions.

# 4.12.1
Released 4th December 2022.

## Fixes
- Fixed items glitching when dragging a stack of items across the crafting grid (desync issues).

# 4.12.2
Released 15th December 2022.

## Fixes
- Folder used for plugins (optionally specified by `--plugins`) is no longer required to be writable.
- Fixed broken writable check for server data folder (`is_writable()` broken on NFS and similar filesystems).
- `Filesystem::createLockFile()` exceptions now include more information about why the lock file could not be created.
- Fixed client-side item predictions not being rolled back when cancelling events such as `PlayerItemUseEvent`.

## Dependencies
- Updated BedrockProtocol to [17.1.0](https://github.com/pmmp/BedrockProtocol/releases/tag/17.1.0+bedrock-1.19.50). This adds some missing `LevelSoundEvent` constants and fixes the values for `ContainerUIIds`.

# 4.12.3
Released 28th December 2022.

## Fixes
- Fixed unauthenticated connections taking up player count slots, preventing players from joining.
- Fixed a possible crash in `World->tickChunk()` when plugins unload chunks during some events.
- `/gamemode` will now report a failure to change game mode if the player is already in the requested game mode.

# 4.12.4
Released 3rd January 2023.

## Fixes
- Added workarounds for an active exploit being used to deny service to servers.

# 4.12.5
Released 6th January 2023.

## Fixes
- Removed a workaround for an old client bug in custom form responses. The code contained a denial-of-service vulnerability.

# 4.12.6
Released 7th January 2023.

## Changes
- Added a new security measure to `NetworkSession` to detect and ban players who flood the server with packets.

# 4.12.7
Released 8th January 2023.

## Fixes
- Fixed players getting kicked when the server lags for too long.
- Fixed players getting kicked when a debugging session is active and a breakpoint is hit.

# 4.12.8
Released 9th January 2023.

## Fixes
- Fixed players getting kicked during PvP.
- Fixed players randomly getting kicked on Windows (improper rate limit handling wrt. 15ms timer resolution).

# 4.12.9
Released 16th January 2023.

## Improvements
### Timings
- Added new timers:
  - `Server Mid-Tick Processing` - time spent processing Snooze interrupts between ticks (e.g. incoming network packets)
  - `Server Tick Update Cycle` - time spent processing regular per-tick updates (e.g. entity movement, world updates, etc.) (`Server->tick()`)
- `Full Server Tick` timer now counts the total of `Server Mid-Tick Processing` and `Server Tick Update Cycle`, which generates more accurate performance metrics.
  - Previously, this timer only counted the time spent during regular per-tick updates, and the time recorded by `Server Mid-Tick Processing` was not included in the report at all.

## Fixes
- Fixed blocks such as pressure plates being able to be placed without the correct supporting blocks if the clicked block was solid.
- Pressure plates now self-destruct when the block below them is removed.
- Fixed being unable to place blocks by clicking on the side of a bell (when the click doesn't result in ringing the bell).
- Fixed various rotation-aware blocks (e.g. stairs) behaving incorrectly when placed by clicking on the side of a replaceable block (e.g. tall grass).
- Fixed banners being able to be placed on top of blocks such as skulls.
- Fixed server-side collision boxes of walls and glass (which should connect, but didn't). Note that wall connections still don't show client side - this just fixes the collision boxes.
- Fixed `PlayerInteractEvent` with `LEFT_CLICK` sometimes firing before `BlockBreakEvent` when breaking blocks.

## Other changes
- Increased packet batch budget for player sessions.

# 4.12.10
Released 18th January 2023.

## Fixes
- Fixed reported server load not including the time spent processing Snooze interrupts between ticks (e.g. incoming network packets).
- Fixed `Connection Handler` entry in timings report not including time spent receiving packets.

## Note about server load & performance
This version will report higher apparent server load than previous versions. The actual performance of the server is unchanged; the previous reported load was inaccurate.
These bugs have been present for nearly 5 years (ever since the first introduction of Snooze in 3.0.0).

# 4.12.11
Released 22nd January 2023.

## General
- Code is now tested and analysed using PHP 8.2 in addition to 8.1 and 8.0.

## Fixes
- Fixed pthreads 5.0.0 incorrectly being treated as compatible.
- Fixed deprecation errors on PHP 8.2.

## Documentation
- Updated documentation in `PlayerPreLoginEvent`.

# 4.13.0
Released 30th January 2023.

## Gameplay
- Death message is now shown on the death screen when a player dies.
- Armour damage is now only increased if the armour reduced the damage taken.
- Implemented Swift Sneak enchantment.
- Fixed incorrect collision box calculation of walls and glass/bars when connected. Note: Client-side, wall connections are still broken; this only fixes projectile flight server-side.

## Performance
- Improved performance of chunk selection for chunk random ticking using a cache. This improves performance of chunk random ticking by 10-20%.

## Localization
- Added localized description for the `/dumpmemory` command.

## Permissions
- Added the following new core permissions:
  - `pocketmine.command.effect.other` - allows the player to use the `/effect` command on other players (default operator only)
  - `pocketmine.command.effect.self` - allows the player to use the `/effect` command on themselves (default operator only)
  - `pocketmine.command.enchant.other` - allows the player to use the `/enchant` command on other players (default operator only)
  - `pocketmine.command.enchant.self` - allows the player to use the `/enchant` command on themselves (default operator only)
  - `pocketmine.command.gamemode.other` - allows the player to use the `/gamemode` command on other players (default operator only)
  - `pocketmine.command.gamemode.self` - allows the player to use the `/gamemode` command on themselves (default operator only)
  - `pocketmine.command.give.other` - allows the player to use the `/give` command on other players (default operator only)
  - `pocketmine.command.give.self` - allows the player to use the `/give` command on themselves (default operator only)
  - `pocketmine.command.spawnpoint.other` - allows the player to use the `/spawnpoint` command on other players (default operator only)
  - `pocketmine.command.spawnpoint.self` - allows the player to use the `/spawnpoint` command on themselves (default operator only)
  - `pocketmine.command.teleport.other` - allows the player to use the `/teleport` command on other players (default operator only)
  - `pocketmine.command.teleport.self` - allows the player to use the `/teleport` command on themselves (default operator only)
  - `pocketmine.command.title.other` - allows the player to use the `/title` command on other players (default operator only)
  - `pocketmine.command.title.self` - allows the player to use the `/title` command on themselves (default operator only)

## Internals
- Decoupled `Player->sendMessage()` and `Player->sendTranslation()`.
- Refactored resource pack loading in `ResourcePackManager` to make it easier to understand.
- Client-aware translation processing has been moved to `NetworkSession` due to being client-specific.
- Replaced hardcoded strings with constants in various places.
- `NetworkSession` destructive cleanup is now deferred to the next session tick. This fixes various `InventoryManager` crashes when kicking players during events.
- Updated code using `strpos()` to use `str_starts_with()`, `str_ends_with()` and `str_contains()` where appropriate.
- Added documentation for some internal methods.

## API
### `pocketmine\command`
- The following new API methods have been added:
  - `protected VanillaCommand->fetchPermittedPlayerTarget(...) : ?Player` - fetches a player target according to the given sender permissions, or null if not found or not permitted

### `pocketmine\entity`
- The following new API methods have been added:
  - `public Living->getDisplayName() : string` - the name of the entity to be shown in death messages, commands etc.

### `pocketmine\event\world`
- The following new classes have been added:
  - `WorldSoundEvent` - called when a sound is played in a world
  - `WorldParticleEvent` - called when a particle is spawned in a world

### `pocketmine\item`
- The following new API methods have been added:
  - `public Item->onInteractEntity(Player $player, Entity $entity, Vector3 $clickVector) : bool` - called when a player interacts with an entity with this item in hand

### `pocketmine\lang`
- `Language->translate()` and `Language->translateString()` no longer parse nested translation in the "base text". This was never intended behaviour, and didn't work beyond the first level anyway.

### `pocketmine\player`
- The following new interfaces have been added:
  - `PlayerDataProvider` - implemented by classes which want to offer storage for player data
- The following new classes have been added:
  - `DatFilePlayerDataProvider` - the default player data provider, which stores `.dat` files in the `players` folder
  - `PlayerDataLoadException` - thrown when an error occurs while loading player data
  - `PlayerDataSaveException` - thrown when an error occurs while saving player data
- The following API methods have been deprecated:
  - `Player->sendTranslation()` - use `Player->sendMessage()` instead with a `Translatable` message

### `pocketmine\resourcepacks`
- The following new API methods have been added:
  - `public ResourcePackManager->setResourceStack(list<ResourcePack> $resourceStack) : void` - sets the list of resource packs to be applied by players
  - `public ResourcePackManager->setPackEncryptionKey(string $id, ?string $key) : void` - sets the encryption key to be used for a resource pack

### `pocketmine\utils`
- The following new API methods have been added:
  - `public static Filesystem::fileGetContents(...) : string` - a wrapper around `file_get_contents()` which throws an exception on failure

### `pocketmine\world`
- The following new API methods have been added:
  - `public World->requestSafeSpawn(?Vector3 $spawn = null) : Promise<Position>` - an async version of `getSafeSpawn()` which generates all the needed chunks before returning

# 4.14.0
Released 8th February 2023.

## General
- Added support for Minecraft: Bedrock Edition 1.19.60.
- Removed support for older versions.

# 4.14.1
Released 15th February 2023.

## Fixes
- Fixed all players getting kicked with `Receiving packets too fast` if a server tick takes longer than 5 seconds (e.g. because of autosave or GC).
- Fixed players getting kicked when linking with entities.

# 4.15.0
Released 17th February 2023.

## General
- Added support for Minecraft: Bedrock Edition 1.19.62.
- Removed support for older versions.

# 4.15.1
Released 21st February 2023.

## Fixes
- Fixed dropped items not despawning when in non-ticking chunks.
- Fixed dropped items not despawning if an infinite pickup delay is set.
- Fixed infinite despawn delay (never despawn) being ignored for dropped items.

# 4.15.2
Released 24th February 2023.

## General
- Accept Minecraft: Bedrock Edition 1.19.63 (identical protocol to 1.19.62, but different version due to Mojang mixup).

## Fixes
- Fixed `World Population` timer sometimes not being stopped, causing strange results in timings reports.

# 4.15.3
Released 7th March 2023.

## Fixes
- Fixed `/dumpmemory` crash when any object contained an `INF` or `NaN` float value.
- Updated RakLib for security fixes.

# 4.16.0
Released 7th March 2023.

## General
- Added granular timings for packet encode, similar to the existing timings for packet decode.
- Split `Player Network Send - Compression` timings into two timers, one for `Session Buffer` compression and one for `Broadcast` compression.
- Timings now covers several areas of the network system which were previously not counted by network timings, but were counted by total timings. This provides a better insight into the performance of the network system.

## Performance
- Improved performance of packet batch handling by avoiding unnecessary object allocations.
- Improved performance of packet broadcasting when the broadcast size is below the batch threshold. Previously, the packets would be encoded once by every recipient, but now they are encoded once and then added to the send buffer of each session in their raw form.
  - This change mostly affects servers with larger maps, where players are more widely distributed.
- Improved performance of packet broadcasting when the broadcast has only one recipient (allow the session to compress the packet with the rest of its buffer).

## Build system
- Added a new script `build/generate-bedrockdata-path-consts.php`, which must be run whenever BedrockData is updated. This script generates a class of constants with the file paths of all BedrockData files.

## API
### `pocketmine\entity`
- The following new API methods have been added:
  - `public Entity->getGravity() : float` - returns the entity's gravity acceleration in blocks/tick^2
  - `public Entity->setGravity(float $gravity) : void` - sets the entity's gravity acceleration in blocks/tick^2

## Internals
- Now uses [`pocketmine/bedrock-data` 2.0.0](https://github.com/pmmp/BedrockData/releases/tag/2.0.0+bedrock-1.19.60).
  - This version is now used by both PM4 and PM5, reducing maintenance burden.
- Now uses [`pocketmine/bedrock-protocol` 19.3.0](https://github.com/pmmp/BedrockProtocol/releases/tag/19.3.0+bedrock-1.19.62).
  - This version provides new APIs for handling packet batches which enabled improving performance and adding new features, such as detailed packet encode timings.
- Crafting recipes and creative inventory data are now loaded from `recipes/legacy_recipes.json` and `recipes/legacy_creativeitems.json` respectively. Previously, these were loaded from BedrockData directly, but BedrockData 2.0 now uses a format which can't be supported in 4.x without BC breaks.
- Added dependencies on [`pocketmine/bedrock-block-upgrade-schema`](https://github.com/pmmp/BedrockBlockUpgradeSchema) and [`pocketmine/bedrock-item-upgrade-schema`](https://github.com/pmmp/BedrockItemUpgradeSchema). These provide mapping files no longer present in BedrockData 2.0.
- Reduced and/or eliminated most usages of `PacketBatch`, since it only appeared as a throwaway object and was therefore wasting performance.
- `Compressor` now exposes `getCompressionThreshold()` instead of `willCompress()`, which allows determining whether a batch will be compressed without allocating it.
- Added `pocketmine\data\bedrock\BedrockDataFiles`, an auto-generated class of constants with the file paths of all BedrockData files. This makes it easier to locate usages, detect unused files and avoid typos.

# 4.17.0
Released 14th March 2023.

## General
- Added support for Minecraft: Bedrock Edition 1.19.70.
- Removed support for older versions.

# 4.17.1
Released 22nd March 2023.

## General
- Docker images for PocketMine-MP are now published on [GitHub Container Registry](https://github.com/pmmp/PocketMine-MP/pkgs/container/pocketmine-mp). The Docker Hub images will stop being maintained in the future.
- Updated translations.

## Fixes
- Fixed server crash on empty packets in certain cases.
- Fixed mushroom blocks dropping the wrong items when broken with a silk-touch tool.
- Fixed mushroom blocks giving the wrong items when block-picked.
- Fixed missing ability flag `PRIVILEGED_BUILDER`.

## Internals
- `update-updater-api.yml` workflow now uses `github.repository_owner` to make it easier to test the workflow on forks.
- Added version-specific channels to `update.pmmp.io`, such as `4`, `4.18-beta`, `4.17`, etc.
- Replaced deprecated `::set-output` commands in GitHub Actions workflows.
- `build/make-release.php` no longer automatically pushes changes, to avoid accidents when testing release workflows on forks.

# 4.17.2
Released 29th March 2023.

## Fixes
- Fixed players being unable to join due to the appearance of a new `x5t` field in the JWT header of Xbox Live authentication tokens.

# 4.18.0
Released 25th March 2023.

## General
- Significantly improved server performance in congested areas of the world (lots of players and/or entities in the same area).
- Included more sections of the network system in `Player Network Send` performance timings.
- Changed the names of some performance timings to make them more user-friendly.
- Removed packet IDs from `receivePacket` and `sendPacket` performance timings, as they were not very useful.
- Added new specialized performance timings for the following:
  - Item entity base ticking (merging)
  - Player movement processing
  - Entity movement processing (collision checking section)
  - Projectile movement (all)
  - Projectile movement processing (ray tracing section)

## API
### `pocketmine\crafting`
- The following new API methods have been added:
  - `CraftingManager->getCraftingRecipeIndex() : array<int, CraftingRecipe>` - returns a list of all crafting recipes
  - `CraftingManager->getCraftingRecipeFromIndex(int $index) : ?CraftingRecipe` - returns the crafting recipe at the given index, or null if it doesn't exist

### `pocketmine\event\server`
- The following new classes have been added:
  - `DataPacketDecodeEvent` - called before a packet is decoded by a `NetworkSession`; useful to mitigate DoS attacks if PocketMine-MP hasn't been patched against new bugs yet

### `pocketmine\inventory\transaction`
- The following API methods have changed signatures:
  - `CraftingTransaction->__construct()` now accepts additional arguments `?CraftingRecipe $recipe = null, ?int $repetitions = null`
- The following new API methods have been added:
  - `TransactionBuilderInventory->getActualInventory() : Inventory` - returns the actual inventory that this inventory is a proxy for

## Internals
### Network
- Introduced new system for broadcasting entity events to network sessions.
  - This change improves performance when lots of players and/or entities are in the same area.
  - New interface `EntityEventBroadcaster` and class `StandardEntityEventBroadcaster` have been added to implement this.
  - All entity-specific `on*()` and `sync*()` methods have been removed from `NetworkSession` (internals backwards compatibility break, not covered by API version guarantee).
  - `NetworkSession` now accepts an `EntityEventBroadcaster` instance in its constructor.
  - `NetworkBroadcastUtils::broadcastEntityEvent()` can be used to efficiently broadcast events to unique broadcasters shared by several network sessions.
- All network sessions now share the same `PacketSerializerContext` and `PacketBroadcaster` by default.
  - Previously, every session had its own context, meaning that broadcast optimisations were not used, causing significant performance losses compared to 3.x.
  - This change improves performance in congested areas by allowing reuse of previously encoded packet buffers for all sessions sharing the same context.
  - Packet broadcasts are automatically encoded separately per unique `PacketSerializerContext` instance. This allows, for example, a multi-version fork to have a separate context for each protocol version, to ensure maximum broadcast efficiency while encoding different packets for different versions.
  - `PacketSerializerContext` is now passed in `NetworkSession::__construct()`, instead of being created by the session.
- `StandardPacketBroadcaster` is now locked to a single `PacketSerializer` context, reducing complexity.
- Introduced `NetworkBroadcastUtils::broadcastPackets()`, replacing `Server->broadcastPackets()`.
- `Server->broadcastPackets()` has been deprecated. It will be removed in a future version.
- Introduced support for the `ItemStackRequest` Minecraft: Bedrock network protocol.
  - This fixes a large number of inventory- and crafting-related bugs.
  - This also improves server security by closing off many code pathways that might have been used for exploits. `TypeConverter->netItemStackToCore()` is no longer used in server code, and remains for tool usage only.
  - This system is also significantly more bandwidth-efficient and has lower overhead than the legacy system.
  - This now opens the gateway to easily implement lots of gameplay features which have been missing for a long time, such as enchanting, anvils, looms, and more.
  - Significant changes have been made to `pocketmine\network\mcpe\InventoryManager` internals. These shouldn't affect plugins, but may affect plugins which use internal network API.
  - **No changes have been made to the plugin `InventoryTransaction` API**.
    - This system has been implemented as a shim for the existing PocketMine-MP transaction system to preserve plugin compatibility. Plugins using `InventoryTransactionEvent` should continue to work seamlessly.
    - The `InventoryTransaction` API will be redesigned in a future major version to make use of the new information provided by the `ItemStackRequest` system.
  - `InventoryTransactionPacket` is no longer sent by the client for "regular" inventory actions. However, it is still sent when dropping items, interacting with blocks, and using items.
- Inventory slot and content syncing is now buffered until the end of the tick. This reduces outbound network usage when the client performs multiple transactions in a single tick (e.g. crafting a stack of items).
- Renamed some `InventoryManager` internal properties to make them easier to understand.
- `TypeConverter->createInventoryAction()` has been removed.
- Packet batch limit has been lowered to `100` packets. With the introduction of `ItemStackRequest`, this is more than sufficient for normal gameplay.

### Other
- Use `Vector3::zero()` instead of `new Vector3()` in some places.

# 4.18.1
Released 27th March 2023.

## General
- `RakLibInterface` now logs the name of the currently active session if a crash occurs when processing a packet. This makes it easier to reproduce bugs, which is important to be able to fix them.
- Added more detailed debugging information to `InventoryManager->syncSelectedHotbarSlot()`.

## Fixes
- Fixed server crash when attempting to drop more of an item from a stack than available in the inventory.
- Fixed packet processing errors when editing writable books.
- Fixed packet processing errors when shift-clicking on the recipe book to craft recipes which draw from a large number of inventory slots.

# 4.18.2
Released 29th March 2023.

## Fixes
- Fixed players being unable to join due to the appearance of a new `x5t` field in the JWT header of Xbox Live authentication tokens.
- Fixed items' durability appearing to reset when moving them around in the inventory.

# 4.18.3
Released 5th April 2023.

## Fixes
- Fixed Average Players not being shown on timings reports when custom player classes are used.
- Fixed incorrect tick violation calculation in timings reports.
- Fixed not being able to add or remove items from the offhand slot.
- Fixed creative inventory item count corruption when taking items (some players would see 64x items in the creative inventory after rejoining or changing gamemode).
- Fixed not being able to drop items directly from the creative inventory on mobile.
- Fixed `DataPacketReceiveEvent` not being called for packets sent by `EntityEventBroadcaster`.
- `CreativeInventory::getItem()` and `CreativeInventory::getAll()` now return cloned itemstacks, to prevent accidental modification of the creative inventory.

# 4.19.0
Released 11th April 2023.

## General
- Updated the Timings system.
  - Timings records now include parent information, allowing them to be displayed in a tree view (e.g. https://timings.pmmp.io/?id=303556).
  - Timings records now include additional information, such as Peak (max time spent on any single tick), and Ticks (number of ticks the timer was active on).
  - New timings have been added for every event.
  - A new timer `Player Network Send - Pre-Spawn Game Data` has been added, and covers most of the time spent handling `ResourcePackClientResponsePacket`, giving a clearer picture of what's happening.
- Improved performance of the plugin event system.
  - By introducing some caching, the event system now has 90% less overhead than in previous versions.
- Improved performance of the random chunk ticking system.
  - The selection of ticked random chunks, and their validation for ticking, is now cached. This significantly reduces the overhead of chunk selection.
  - Factions servers and other game modes with big maps and sparsely populated areas will see the most benefit from this change.
  - Real-world performance benefit of this change is anywhere from 0-20%, depending on server type and configuration.
- The `timings paste` command now logs a debug message with the server response on failure to paste a timings report.

## API
### `pocketmine\entity\object`
- The following API constants have been added:
  - `ExperienceOrb::DEFAULT_DESPAWN_DELAY` - the default delay in ticks before an experience orb despawns
  - `ExperienceOrb::NEVER_DESPAWN` - magic value for `setDespawnDelay()` to make an experience orb never despawn
  - `ExperienceOrb::MAX_DESPAWN_DELAY` - the maximum delay in ticks before an experience orb despawns
- The following API methods have been added:
  - `public ExperienceOrb->getDespawnDelay() : int` - returns the delay in ticks before this experience orb despawns
  - `public ExperienceOrb->setDespawnDelay(int $despawnDelay) : void` - sets the delay in ticks before this experience orb despawns
- The following properties have been deprecated
  - `ExperienceOrb->age` - superseded by despawn delay methods

### `pocketmine\event`
- The following API methods have been added:
  - `public HandlerList->getListenerList() : list<RegisteredListener>` - returns an ordered list of handlers to be called for the event

### `pocketmine\player`
- The following API methods have behavioural changes:
  - `ChunkSelector->selectChunks()` now yields the distance in chunks from the center as the key, instead of an incrementing integer.
- The following classes have been deprecated:
  - `PlayerChunkLoader` (this was technically internal, but never marked as such)

### `pocketmine\timings`
- The following API constants have been deprecated:
- `Timings::INCLUDED_BY_OTHER_TIMINGS_PREFIX` - this is superseded by timings group support (see `Timings::GROUP_BREAKDOWN`)
- The following API constants have been added:
- `Timings::GROUP_BREAKDOWN` - this group makes a timer appear in the `Minecraft - Breakdown` section of a timings report
- The following API methods have been added:
- `public TimingsHandler->getGroup() : string` - returns the name of the table in which this timer will appear in a timings report
- The following API methods have changed signatures:
- `TimingsHandler->__construct()` now accepts an additional, optional `string $group` parameter, which defaults to `Minecraft`.

### `pocketmine\world`
#### Highlights
Ticking chunks is now done using the `ChunkTicker` system, which has a much more fine-grained API than the old `TickingChunkLoader` system, as well as better performance.
It works similarly to the `ChunkLoader` system, in that chunks will be ticked as long as at least one `ChunkTicker` is registered for them.

#### API changes
- The following classes have been deprecated:
  - `TickingChunkLoader` - this has been superseded by the more powerful and performant `ChunkTicker` APIs
- The following classes have been added:
  - `ChunkTicker` - an opaque object used for `registerTickingChunk()` to instruct the `World` that we want a chunk to be ticked
- The following API methods have been added:
  - `public World->registerTickingChunk(ChunkTicker $ticker, int $chunkX, int $chunkZ) : void` - registers a chunk to be ticked by the given `ChunkTicker`
  - `public World->unregisterTickingChunk(ChunkTicker $ticker, int $chunkX, int $chunkZ) : void` - unregisters a chunk from being ticked by the given `ChunkTicker`

# 4.19.1
Released 14th April 2023.

## Fixes
- Fixed inventory rollbacks when spreading items in ender chests.
- Fixed inventory rollbacks when shift-clicking to craft and the outputs would have been split across multiple inventory slots.
- Fixed incorrect spawn terrain generation for newly created worlds.
- Fixed `chunk-ticking.tick-radius` not disabling chunk ticking when set to `0`.
- Fixed chunks not being ticked if they previously left a player's simulation distance without leaving their view distance.
- Fixed height of collision boxes for Grass Path and Farmland blocks.

# 4.19.2
Released 14th April 2023.

## Fixes
- Fixed player timings duplication leading to extremely large timings reports when timings runs for a long time with many players.
- Packet timings are now indexed by class FQN instead of packet ID. This prevents erroneous timer reuse on packet ID reuse (e.g. multi version servers).
- Fixed entity timings being shared by different classes with the same short name. This led to incorrect timings being reported for some entities when custom entities were used.

# 4.19.3
Released 21st April 2023.

## General
- Error IDs for `Packet processing error` disconnects are now split into 4-character chunks to make them easier to type (since they can't be copied from the disconnection screen of a client).

## Fixes
- Fixed entity-block intersections being checked twice per tick. Besides wasting CPU time, this may have caused unexpected behaviour during entity-block interactions with blocks like water or cacti.
- Fixed performance issue in network inventory synchronization due item NBT being prepared twice.
- Fixed `tools/simulate-chunk-selector.php` argument parsing being completely broken (weird behaviour of PHP `getopt()`).

## Internals
- `TimingsHandler->stopTiming()` now logs an error message if a subtimer wasn't stopped, rather than throwing an exception.
  - Due to interactions between `try...finally` and unexpected errors, throwing exceptions made it difficult for plugin developers to debug errors in their plugins, since it obscured the original error.

# 4.20.0
Released 26th April 2023.

## General
- Added support for Minecraft: Bedrock Edition 1.19.80.
- Removed support for older versions.

## Fixes
- Fixed packet processing error when attempting to use a stonecutter.
- Fixed armor slots containing ghost items when cancelling right-click to equip armor.
- Fixed crash in `HandlerList->getListenersByPriority()` when no listeners are registered at the given priority.

## API
### `pocketmine\block`
- The following API methods have been added:
  - `public BaseSign->getEditorEntityRuntimeId() : int` - returns the entity runtime ID of the player currently editing this sign, or `null` if none
  - `public BaseSign->setEditorEntityRuntimeId(?int $editorEntityRuntimeId) : $this` - sets the entity runtime ID of the player currently editing this sign

### `pocketmine\player`
- The following API methods have been added:
  - `public Player->openSignEditor(Vector3 $position) : void` - opens the client-side sign editor GUI for the given position

# 4.20.1
Released 27th April 2023.

## Fixes
- Fixed server crash when firing a bow while holding arrows in the offhand slot.

## Internals
- `ItemStackContainerIdTranslator::translate()` now requires an additional `int $slotId` parameter and returns `array{int, int}` (translated window ID, translated slot ID) to be used with `InventoryManager->locateWindowAndSlot()`.
- `InventoryManager->locateWindowAndSlot()` now checks if the translated slot actually exists in the requested inventory, and returns `null` if not. Previously, it would return potentially invalid slot IDs without checking them, potentially leading to crashes.

# 4.20.2
Released 4th May 2023.

## Fixes
- Fixed all types of wooden logs appearing as oak in the inventory.
- Fixed a performance issue in `BaseInventory->canAddItem()` (missing `continue` causing useless logic to run).

# 4.20.3
Released 6th May 2023.

## Improvements
- Reduced memory usage of `RuntimeBlockMapping` from 25 MB to 9 MB. Since every thread has its own copy of the block map, this saves a substantial amount of memory.

## Fixes
- Fixed players falling through blocks in spectator mode.
- Fixed timings reports getting bloated by prolific usage of `PluginManager->registerEvent()`.
  - This was caused by creating a new timings handler for each call, regardless of whether a timer already existed for the given event and callback.
- Fixed `Full Server Tick` and other records being missing from timings reports.
  - This was caused by timings handler depth not getting reset when timings was disabled and later re-enabled.

# 4.20.4
Released 6th May 2023.

## Fixes
- Fixed players being forced into flight mode in every game mode.
  - Moral of the story: do not assume anything in Mojang internals does what its name suggests...

# 4.20.5
Released 30th May 2023.

## Fixes
- Fixed server crash due to a bug in upstream dependency [`netresearch/jsonmapper`](https://github.com/cweiske/JsonMapper).

# 4.21.0
Released 17th May 2023.

## General
- PHP 8.1 is now required. Most plugins should run without changes, but some might need to be updated due to language-level deprecations.
- Ticking chunk count is now shown separately from loaded chunk count in the `/status` command, providing useful performance information.
- Further improved performance of ticking chunk selection.
- Improved performance of some inventory functions.
- Reduced server memory footprint in most cases by ~9 MB per thread.
- Due to large overhead, async network compression is now only used for packets larger than 10 KB by default.

## Configuration
- Added the following new `pocketmine.yml` configuration options:
  - `network.async-compression-threshold` - minimum size of packet which will be compressed using `AsyncTask`
    - Default is 10 KB, which means that very few packets will use async compression in practice. This is because the overhead of compressing async is currently so high that it's not worth it for smaller packets.

## Timings
- Timings reports no longer include the unused metadata fields `Entities` and `LivingEntities`.
- Timings reports now correctly calculate the peak time of a timer.
  - Previously it was incorrectly recorded as the longest time spent in a single tick, rather than the longest time spent in a single activation.
  - Timings report version has been bumped to `2` to reflect this change.
- All world-specific timers now have generic aggregate timings, making it much easier to locate performance patterns across all worlds.

## Gameplay
- Players in spectator mode are no longer able to pick blocks, and now have finite resources similar to survival mode.

## API
### `pocketmine\world`
- The following API methods have been added:
  - `public World->getTickingChunks() : list<int>` - returns a list of chunk position hashes (a la `World::chunkHash()`) which are currently valid for random ticking

### `pocketmine\inventory`
- The following API methods have been added:
  - `protected BaseInventory->getMatchingItemCount(int $slot, Item $test, bool $checkDamage, bool $checkTags) : int` - returns the number of items in the given stack if the content of the slot matches the test item, or zero otherwise
    - This should be overridden if directly extending `BaseInventory` to provide a performance-optimised version. A slow default implementation is provided, but it will be removed in the future.
  
## Internals
### Entity
- Unused `NameTag` tag is no longer saved for `Human` entities.

### Inventory
- `BaseInventory` now uses a new internal method `getMatchingItemCount()` to locate items in the inventory without useless cloning. This improves performance of various API methods, such as `addItem()`, `contains()`, and more.
- Specialization of `Inventory->isSlotEmpty()` in `BaseInventory` subclasses has been added to improve performance of some API methods.

### Network
- `RuntimeBlockMapping` no longer keeps all block palette NBT data in memory.
  - This significantly reduces server idle memory footprint.
  - For multi-version implementations, this will have a significant impact on memory usage, since a different block palette is often required to support each version.
  - NBT will be lazy-loaded into memory and cached if `getBedrockKnownStates()` is called. However, this is not used by PocketMine-MP under normal circumstances.
- Removed unnecessary usage of `Utils::validateCallableSignature()` from some internal network pathways, improving performance.

### Scheduler
- `AsyncPool` no longer double-checks progress updates on completed tasks.

### World
- Ticking chunks are now tracked in `World->validTickingChunks` and `World->recheckTickingChunks`.
    - This allows avoiding rechecking every ticking chunk for validity during ticking chunk selection, improving performance.
    - In some cases, this allows bypassing chunk selection entirely, reducing selection cost to zero.
- Registered but ineligible ticking chunks are no longer rechecked every tick.
    - This was causing wasted cycles during async worker backlog.
    - The internal system must call `markTickingChunkForRecheck()` whenever a ticking chunk's eligibility for ticking has potentially changed, rather than just when it has changed from a yes to a no.

# 4.21.1
Released 30th May 2023.

# 4.22.0
Released 7th June 2023.

**For Minecraft: Bedrock Edition 1.20.0**

This is a support release for Minecraft: Bedrock Edition 1.20.0.

**Plugin compatibility:** Plugins for previous 4.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## Interim releases
If you're upgrading from 4.20.x directly to 4.22.x, please also read the following changelogs, as the interim releases contain important changes:
- [4.21.0](https://github.com/pmmp/PocketMine-MP/blob/4.22.0/changelogs/4.21.md#4210) - PHP 8.1 minimum version, minor performance improvements

## General
- Added support for Minecraft: Bedrock Edition 1.20.0.
- Removed support for older versions.

## Fixes
- Removed deprecated `ReflectionProperty::setAccessible()` calls.
- Fixed jukebox music not stopping when destroyed by an explosion.

# 4.22.1
Released 9th June 2023.

## Fixes
- Reokaced workaround for an old teleporting client bug:
  - This workaround broke due to an additional client bug introduced by 1.20, causing players to become frozen to observers when teleported.
  - The original client bug has still not been fixed, meaning a new workaround was needed, but no perfect solution could be found.
  - The new workaround involves broadcasting teleport movements as regular movements, which causes unwanted interpolation between the old and new positions, but otherwise works correctly. This solution is not ideal, but it is the best we can do for now.
  - See issues [#4394](https://github.com/pmmp/PocketMine-MP/issues/4394) and [#5810](https://github.com/pmmp/PocketMine-MP/issues/5810) for more details.

## Fixes
- Fixed server crash due to a bug in upstream dependency [`netresearch/jsonmapper`](https://github.com/cweiske/JsonMapper).

# 4.22.2
Released 1st July 2023.

## Changes
- Added obsoletion warnings to the server log at the end of the startup sequence.

## Fixes
- Fixed players being disconnected en masse with "Not authenticated" messages.
  - This occurred due to a check intended to disable the old authentication key after July 1st.
  - We expected that the new key would have been deployed by Mojang by now, but it seems like that has not yet happened.
  - Due to the lack of a hard date for the key changeover, we guessed that July 1st would be a safe bet, but this appears to have backfired.
  - This version will accept both old and new keys indefinitely.
  - A security release will be published to remove the old key after the transition occurs.

# 4.22.3
Released 11th July 2023.

## Fixes
- Fixed mishandling of NBT leading to a server crash when editing signs.
- Fixed an edge case crash that could occur in `AsyncTask->__destruct()` when thread-local storage referenced other `AsyncTask` objects.

## Internals
- Added a concurrency lock to prevent the `update-updater-api` GitHub Action from running for multiple releases at the same time (which would have caused one of them to fail due to git conflicts).

# 4.23.0
Released 12th July 2023.

**For Minecraft: Bedrock Edition 1.20.10**

This is a support release for Minecraft: Bedrock Edition 1.20.10.

**Plugin compatibility:** Plugins for previous 4.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## General
- Added support for Minecraft: Bedrock Edition 1.20.10.
- Removed support for older versions.

## Fixes
- Fixed Docker image build failure due to outdated `build/php` submodule.

# 4.23.1
Released 14th July 2023.

## Fixes
- Hardened validation of JWT signing keys in `LoginPacket`.
- Fixed server crash due to a bug in upstream dependency [`netresearch/jsonmapper`](https://github.com/cweiske/JsonMapper).

# 4.23.2
Released 18th July 2023.

## Fixes
- Fixed login errors due to a new `sandboxId` field appearing in the Xbox Live authentication data in `LoginPacket`. All clients, regardless of version, are affected by this change.

# 4.23.3
Released 24th July 2023.

## Documentation
- Fixed typo in `ChunkSelector::selectChunks()` documentation.

## Fixes
- Fixed the server not stopping properly during crash conditions on *nix platforms.
- Fixed `HORSE_EQUIP` and `SMITHING_TABLE_TEMPLATE` container UI types not being handled by `ItemStackContainerIdTranslator`. This bug prevented plugins from implementing missing inventory types.
- Player emotes no longer broadcast messages to other players. This was unintended behaviour caused by a client-side behavioural change.
- Shulker boxes no longer support the placement of torches or other similar blocks.
- Fire can now be placed on upper slabs and the top of upside-down stairs.

# 4.23.4
Released 1st August 2023.

## Fixes
- Fixed exponentially increasing lag when many hundreds of non-mergeable dropped items occupied the same space. This disproportionately affected SkyBlock servers due to large cactus farms using water to collect items together. 

# 4.23.5
Released 9th August 2023.

## General
- Updated translation data to [pmmp/Language 2.19.6](https://github.com/pmmp/Language/releases/tag/2.19.6).

## Fixes
- Fixed `PluginBase->saveResource()` leaking file resources when the data file already exists in the plugin's data folder. This bug existed since 2014 and was only discovered recently.
- Fixed coral blocks becoming dead after calling `getDropsForCompatibleTool()` on them.
- Fixed `BlockDeathEvent->getOldState()` returning a block which is already dead.

# 4.23.6
Released 21st August 2023.

## Fixes
- Added a workaround for armor and other inventories not working correctly after inventory sync. This is caused by a client bug.

# 5.0.0
Released 1st June 2023.

**For Minecraft: Bedrock Edition 1.19.80**

5.0.0 is a major feature update to PocketMine-MP, including support for Bedrock worlds from 1.13 onwards, a large array of new blocks and items, and various changes to the plugin API.

It is **not** compatible with plugins written for 4.x.y, and plugins may require code changes to work with it.

**As this changelog is quite large, its accuracy and completeness cannot be guaranteed.**
Make sure you're looking at the [latest revision](https://github.com/pmmp/PocketMine-MP/blob/stable/changelogs/5.0.md), as it may be amended after release.

## Core
- Worlds are now saved according to the Bedrock 1.19.80 format.
- Worlds generated by Bedrock from 1.13.0 and up are now supported (previously, only worlds up to 1.12 were supported).
- `/particle` now accepts strings for particle data instead of integers.
- `/particle` no longer accepts integers for block or item IDs.
- The usage of `blockcrack`, `iconcrack` and `blockdust` particle types in `/particle` now follows the same pattern as
  other particle types, with the data for each being passed in the `data` parameter instead of being baked into the
  particle name.
- Commands are now enabled by default in worlds exported from PocketMine-MP to Bedrock.

## Build system
- `build/generate-block-serializer-consts.php` has been added to generate `BlockTypeNames`, `BlockStateNames` and `BlockStateStringValues` in the `pocketmine\data\bedrock\block` package.
- `build/generate-item-type-names.php` has been added to generate `ItemTypeNames` in the `pocketmine\data\bedrock\item` package.
- `build/generate-runtime-enum-serializers.php` has been added to generate `RuntimeEnumSerializer`, `RuntimeEnumSerializerTrait`, and `RuntimeEnumSizeCalculatorTrait` in `pocketmine\data\runtime` package.

## Localization
- Localized disconnect messages are now used in the following cases:
  - Server full
  - Player not on the server whitelist
  - Player on the server ban list
  - Invalid skin
  - Invalid username
  - Kicked using `/kick`
  - Banned using `/ban`
  - Failure to find a safe spawn position
- Session open, session close and session player name discovery messages are now localized.
- All permissions now have localized descriptions. These are not currently used by PocketMine-MP, but may be useful for plugins.

## Performance
- Improved performance of dropping block inventory contents when the block is destroyed.
- Improved light propagation performance by 10-15%.
- [`ext-pmmpthread` version 6.0.0](https://github.com/pmmp/ext-pmmpthread/releases/tag/6.0.0) is now used, featuring significant performance improvements for thread-safe objects and various threading use-cases.

## Tools
- The following tool scripts have been added:
  - `generate-block-palette-spec.php` - generates a JSON file with a readable overview of blocks, their state
    properties, and their possible values
  - `generate-blockstate-upgrade-schema.php` - generates JSON blockstate upgrade schemas like those found
    in [BedrockBlockUpgradeSchema](https://github.com/pmmp/BedrockBlockUpgradeSchema)
  - `generate-item-upgrade-schema.php` - generates JSON item ID/meta upgrade schemas like those found
    in [BedrockItemUpgradeSchema](https://github.com/pmmp/BedrockItemUpgradeSchema)
  - `generate-bedrock-data-from-packets.php` - generates various files for [BedrockData](https://github.com/pmmp/BedrockData)
    - This script accepts a txt file containing base64-encoded packet dumps.
    - This script has been in use for several years, but has only now been open-sourced.
    - It's used to generate data such as crafting recipes, creative inventory data, and various other blobs of data needed to support the current version of Minecraft: Bedrock Edition.

## Gameplay
### Blocks
- Added the following new blocks:
  - Amethyst Block
  - Ancient Debris
  - Azalea Leaves
  - Basalt
  - Blackstone blocks, slabs, stairs, and walls
  - Cakes with Candle & Dyed Candle
  - Calcite
  - Candle & Dyed Candle
  - Cartography Table (not currently usable due to maps not being implemented)
  - Cauldron
  - Cave Vines
  - Chain
  - Chiseled Deepslate
  - Chiseled Nether Bricks
  - Chiseled Polished Blackstone
  - Chorus Flower
  - Chorus Plant
  - Cobbled Deepslate blocks, slabs, stairs, and walls
  - Copper Ore
  - Copper block (random oxidation not yet implemented)
  - Crached Deepslate Tiles
  - Cracked Deepslate Bricks
  - Cracked Nether Bricks
  - Cracked Polished Blackstone Bricks
  - Crimson buttons, doors, fences, fence gates, hyphae, planks, pressure plates, signs, slabs, stairs, stems, and trapdoors
  - Crying Obsidian
  - Cut Copper block, stairs and slabs (random oxidation not yet implemented)
  - Deepslate
  - Deepslate Bricks blocks, slabs, stairs, and walls
  - Deepslate Ores (coal, copper, diamond, emerald, gold, iron, lapis lazuli, redstone)
  - Deepslate Tiles blocks, slabs, stairs, and walls
  - Flowering Azalea Leaves
  - Froglight (pearlescent, verdant, ochre)
  - Gilded Blackstone
  - Glow Item Frame
  - Hanging Roots
  - Honeycomb Block
  - Light Block
  - Lightning Rod
  - Mangrove Leaves
  - Mangrove Roots
  - Mangrove buttons, doors, fences, fence gates, logs, planks, pressure plates, signs, slabs, stairs, trapdoors, and wood
  - Mud Bricks blocks, slabs, stairs, and walls
  - Muddy Mangrove Roots
  - Nether Gold Ore
  - Netherite Block
  - Polished Basalt
  - Polished Blackstone Bricks blocks, slabs, stairs, and walls
  - Polished Blackstone blocks, buttons, pressure plates, slabs, stairs, and walls
  - Polished Deepslate blocks, slabs, stairs, and walls
  - Quartz Bricks
  - Reinforced Deepslate
  - Rooted Dirt
  - Sculk
  - Shroomlight
  - Smithing Table
  - Smooth Basalt
  - Soul Fire
  - Soul Lantern
  - Soul Soil
  - Soul Torch
  - Spore Blossom
  - Tinted Glass
  - Tuff
  - Twisting Vines
  - Warped Wart Block
  - Warped buttons, doors, fences, fence gates, hyphae, planks, pressure plates, signs, slabs, stairs, stems, and trapdoors
  - Weeping Vines
  - Wither Rose
- Added support for basalt generators
- Added support for dyeing sign text and making it glow.
- All-sided logs ("wood", for want of a better name) can now be placed in X, Y, and Z orientations.
- Coral and coral fans now behave correctly when placed out of water (they no longer immediately die).
- Fixed dead bush being able to be placed on some invalid blocks (e.g. stone).
- Fixed lava setting entities on fire for an incorrect duration (Java vs Bedrock inconsistency).
- Fixed sugarcane not being able to be placed on some blocks.
- Iron Ore and Gold Ore now drop Raw Iron and Raw Gold respectively, instead of the ore blocks.
- Item frames can now be placed on the top and bottom of blocks.
- Stripping logs by right-clicking them with an axe is now supported.
- TNT can now be ignited by fire charges.
- Vines can now only be placed on the side of full-cube blocks.
- Walls now connect when placed, following the pre-1.16 logic. (1.16 logic is planned to be implemented, but currently low priority.)
- Anvils are now damaged when they hit the ground after falling.
- Added missing sounds for anvils hitting the ground after falling.
- Anvils now damage entities when they fall on top of them.

### Items
- Added the following new items:
  - Amethyst Shard
  - Antidote (from Education Edition)
  - Copper Ingot
  - Disc Fragment (5)
  - Echo Shard
  - Elixir (from Education Edition)
  - Eye Drops (from Education Edition)
  - Fire Charge
  - Glow Berries
  - Glow Ink Sac
  - Honey Bottle
  - Honeycomb
  - Mangrove Boat (incomplete)
  - Music Disc (5)
  - Music Disc (Otherside)
  - Music Disc (Pigstep)
  - Netherite Axe
  - Netherite Boots
  - Netherite Chestplate
  - Netherite Helmet
  - Netherite Ingot
  - Netherite Leggings
  - Netherite Pickaxe
  - Netherite Scrap
  - Netherite Shovel
  - Netherite Sword
  - Phantom Membrane
  - Raw Copper
  - Raw Gold
  - Raw Iron
  - Spyglass
  - Suspicious Stew
  - Tonic (from Education Edition)
- Glass bottles can now be filled with water by clicking on a water source block.
- Implemented Swift Sneak enchantment.
- Armour durability is now only reduced when the wearer receives a type of damage that the armour can protect against.
- Bells now ring when hit by a projectile.

### Worlds
- World height of -64 to 319 is now supported.
- Added support for 3D biomes. This isn't used by PocketMine-MP yet, but is necessary to be able to fully load 1.18 worlds.

## API
### General
- Union and mixed native parameter, return and property types are now used where appropriate.
- Protected and public properties now use native property types wherever possible.
- Parameter and return typehints have been applied in many places where it wasn't previously possible.

### Dependencies
- [`ext-pmmpthread` version 6.0.0](https://github.com/pmmp/ext-pmmpthread/releases/6.0.0) (renamed from `ext-pthreads`) is now required. This version features major API changes and improvements. Please read the [upgrading guide](https://github.com/pmmp/ext-pmmpthread/blob/fork/docs/UPGRADING_4.x_to_6.0.md) for details.
- [`pocketmine/snooze` version 0.5.0](https://github.com/pmmp/Snooze/releases/0.5.0) is now required.
- [`pocketmine/raklib` version 0.15.0](https://github.com/pmmp/RakLib/releases/0.15.0) is now required.
- [`pocketmine/raklib-ipc` version 0.2.0](https://github.com/pmmp/RakLibIpc/releases/0.2.0) is now required.
- `pocketmine/classloader` and `pocketmine/log-pthreads` packages have been removed. The relevant classes from these packages are now included in-house in the `pocketmine/thread` namespace.
  - `BaseClassLoader` is replaced with `pocketmine\thread\ThreadSafeClassLoader`
  - `ThreadedLogger` is replaced by `pocketmine\thread\ThreadSafeLogger`
  - `AttachableThreadedLogger` is replaced by `pocketmine\thread\AttachableThreadSafeLogger`
  - `ThreadedLoggerAttachment` is replaced by `pocketmine\thread\ThreadSafeLoggerAttachment`
- `webmozart/path-util` has been removed (replaced by [`symfony/filesystem`](https://github.com/symfony/filesystem)).

### `pocketmine\block`
#### Highlights
- Blocks no longer use internal Minecraft IDs and metadata to identify themselves. All APIs associated with legacy IDs
  and meta have been removed.
- A new set of runtime IDs generated from `VanillaBlocks` is used to identify block types. These IDs are defined
  in `BlockTypeIds`.
  - These new IDs are used for runtime representation of blocks on chunks, and for type comparison purposes.
  - Block type IDs are used at **runtime only**. **Do not store them in configs or databases**, as they are subject to
    change without warning.
  - Block type IDs are **specific to PocketMine-MP** and have no relation to the IDs used by Minecraft.
  - Block type IDs cannot be negative
  - Block type IDs must not be reused, even if overriding an already defined block
- Block state properties (e.g. facing, colour, etc.) are now represented by PM-specific state data instead of legacy
  metadata. The state data consists of:
  - Block-item state properties - retained by items when the block is broken (colour, wet/dry, coral type, etc.) - handled by `Block->describeBlockItemState()`
  - Block-only state data - discarded when the block is broken (facing direction, lit/unlit, powered/unpowered, etc.) - handled by `Block->describeBlockOnlyState()`
- Chunks now store dynamic state ID derived from the runtime type ID and runtime (PocketMine-MP defined) state data.
- Introduced "type tags" concept, which allows marking certain blocks as having certain behaviours.
  - The idea for this system was borrowed from the Minecraft Java tags system.
  - It's still in very early concept stage, but is currently used for deciding which types of blocks plants can be placed on without needing to enumerate every single ID in every class, eliminating a bunch of boilerplate code and improving consistency.
- All `Block` descendents now accept `BlockTypeInfo` in the constructor, instead of `BlockBreakInfo`. This allows for future additions without needing to change dozens of overridden constructors.
- `&$returnedItems` reference parameter is now used in some places such as `Block->onInteract()` to enable actions to return items to players without caring about whether they are in creative or anything else.
  - This eliminates boilerplate code of deciding whether to set the player's held item or not, as well as automatically dropping any overflow items that don't fit into the inventory.
  - This is currently used when filling/emptying cauldrons using buckets or glass bottles.
- Dependency between `RuntimeBlockStateRegistry` (previously `BlockFactory`) and `VanillaBlocks` has been inverted.
  - Now, blocks types are defined in `VanillaBlocks`
  - `RuntimeBlockStateRegistry` automatically registers states for blocks defined in `VanillaBlocks`.
  - Manual registration in `RuntimeBlockStateRegistry` is still required for custom blocks (see section below about registering new blocks).
- `RuntimeBlockStateRegistry` now has only one purpose - to map internal blockstate IDs to `Block` objects when reading blocks from chunks. It should not be used by plugins unless registering new blocks.
  - To get a block at runtime, e.g. stone, use `VanillaBlocks::STONE()`
  - To load a block from **old** config or database data:
    1. Use `GlobalBlockStateHandlers::getUpgrader()->upgradeIntIdMeta()` to convert it to modern data
    2. Pass the data to `GlobalBlockStateHandlers::getDeserializer()` to get a blockstate ID
    3. Pass the blockstate ID to `RuntimeBlockStateRegistry::fromStateId()` to get a `Block` instance
  - Prefer using `StringToItemParser` wherever possible for configs and databases (see `lookupAliases()` and `lookupBlockAliases()`).

#### Registering new blocks
##### In a plugin
To add a vanilla block in a plugin which isn't yet supported by PocketMine-MP, do the following:

1. Get a new type ID using `BlockTypeIds::newId()` - _you'll want to keep this in a property somewhere if you want to
   compare using `getTypeId()` later_
2. Set up the block type somewhere - _this can be anywhere you like, e.g. a plugin main class property, but using
   a `RegistryTrait` class is recommended - you'll need this later to create new instances of the block_
3. Register the block in `RuntimeBlockStateRegistry` - _this informs the server of all the block's possible states so
   that it can be read from chunks at runtime_
4. Register a deserializer for the block's Minecraft ID in `BlockStateToObjectDeserializer` - _needed for the block to
   be recognized when loaded from disk_
5. Register a serializer for the block in `BlockObjectToStateSerializer` - _needed for the block to be saved to disk,
   and to be sent over the network_
6. Optionally, register a string alias for the block in `StringToItemParser` - _so that it can be given via `/give`_

To see a demo of how to do this in a plugin, see [this example plugin](https://github.com/pmmp/RegisterBlocksDemoPM5).

Registering custom blocks follows a similar process, but requires additional steps to modify `BlockStateDictionary`
which won't be covered here.
Since this is not currently officially supported by PocketMine-MP, this won't be covered here.

This is admittedly rather more of a hassle than in PM4, but this system offers significantly more flexibility than the
old system.

##### As a PocketMine-MP core contribution
To register a new vanilla block into the core, the process is slightly different:

1. Instead of using `BlockTypeIds::newId()`, add a new constant for the block to `BlockTypeIds`
2. Register the new block in `VanillaBlocks` - `RuntimeBlockStateRegistry` will automagically take notice of all blocks
   defined in `VanillaBlocks`
3. Follow steps 4 onwards above

#### Change list
- The following classes have been removed:
  - `BlockIdentifierFlattened`
  - `BlockLegacyIdHelper`
  - `BlockLegacyIds`
  - `BlockLegacyMetadata`
  - `utils\BlockDataSerializer`
  - `utils\ColorInMetadataTrait` - `utils\ColoredTrait` now implements colour type data serialization uniformly
  - `utils\InvalidBlockStateException` - this has been superseded by `pocketmine\data\runtime\InvalidSerializedRuntimeDataException`
  - `utils\NormalHorizontalFacingInMetadataTrait` - `utils\HorizontalFacingTrait` now implements facing type data serialization uniformly
  - `utils\PillarRotationInMetadataTrait` - `utils\PillarRotationTrait` now implements rotation type data serialization uniformly
- The following classes have been renamed:
  - `BlockFactory` -> `RuntimeBlockStateRegistry` - this class is now exclusively used for mapping state IDs to block instances for runtime chunk block reading
  - `Skull` -> `MobHead`
  - `utils\SkullType` -> `utils\MobHeadType`
  - `utils\TreeType` -> `pocketmine\world\generator\object\TreeType`
- The following classes have been added:
  - `BaseCake`
  - `BaseFire`
  - `BlockTypeIds` - list of type IDs, one for each entry in `VanillaBlocks`
  - `BlockTypeInfo`
  - `BlockTypeTags`
  - `CakeWithCandle`
  - `CakeWithDyedCandle`
  - `Candle`
  - `CartographyTable`
  - `Chain`
  - `CopperOre`
  - `CopperSlab`
  - `CopperStairs`
  - `Copper`
  - `DyedCandle`
  - `GildedBlackstone`
  - `GoldOre`
  - `HangingRoots`
  - `IronOre`
  - `Light`
  - `LightningRod`
  - `NetherGoldOre`
  - `Sculk`
  - `SmithingTable`
  - `SoulFire`
  - `WitherRose`
  - `utils\CandleTrait`
  - `utils\CopperOxidation`
  - `utils\CopperTrait`
  - `utils\SaplingType` - enum of all sapling types
  - `utils\WallConnectionType` - enum of all possible wall connection types
  - `utils\WoodTypeTrait`
  - `utils\WoodType` - enum of all possible wood types, used for wood material blocks like planks and logs
- The following API methods have been removed:
  - `Block->getId()` - for type comparisons, use `Block->getTypeId()` instead
  - `Block->getMeta()` - for state comparisons, use `Block->getStateId()` instead
  - `Block->getStateBitmask()`
  - `Block->readStateFromData()`
  - `Block->writeStateToItemMeta()`
  - `Block->writeStateToMeta()`
  - `BlockFactory->get()` - see notes above about `RuntimeBlockStateRegistry`
  - `BlockIdentifier->getAllBlockIds()`
  - `BlockIdentifier->getBlockId()`
  - `BlockIdentifier->getItemId()`
  - `BlockIdentifier->getVariant()`
  - `Door->isPowered()`
  - `Door->setPowered()`
  - `MobHead->isNoDrops()` (previously `Skull->isNoDrops()`)
  - `MobHead->setNoDrops()` (previously `Skull->setNoDrops()`)
  - `VanillaBlocks::*_GLAZED_TERRACOTTA()` - use `VanillaBlocks::GLAZED_TERRACOTTA()->setColor(DyeColor::WHATEVER())` instead
  - `utils\FallableTrait->getId()` is no longer required
  - `utils\FallableTrait->getMeta()` is no longer required
  - `utils\MobHeadType->getMagicNumber()` (previously `utils\SkullType->getMagicNumber()`)
  - `utils\MobHeadType::fromMagicNumber()` (previously `utils\SkullType::fromMagicNumber()`)
- The following constants have been removed:
  - `Block::INTERNAL_METADATA_BITS`
  - `Block::INTERNAL_METADATA_MASK`
- The following API methods have been renamed:
  - `Block->getFullId()` -> `Block->getStateId()`
  - `Block->isSameType()` -> `Block->hasSameTypeId()`
  - `MobHead->getSkullType()` -> `MobHead->getMobHeadType()` (previously `Skull->getSkullType()`)
  - `MobHead->setSkullType()` -> `MobHead->setMobHeadType()` (previously `Skull->setSkullType()`)
- The following API methods have signature changes:
  - `Block->onBreak()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Block->onInteract()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Block->readStateFromWorld()` now returns `Block` - this allows blocks to replace themselves with a different block entirely based on world conditions.
  - `BlockIdentifier->__construct()` now accepts `int $blockTypeId`, and no longer accepts `int $blockId, int $variant, ?int $itemId`
  - `ItemFrame->getFacing()` may now return `Facing::UP` and `Facing::DOWN`
  - `ItemFrame->setFacing()` now accepts `Facing::UP` and `Facing::DOWN`
  - `Leaves->__construct()` now accepts `LeavesType $leavesType` instead of `TreeType $treeType`
  - `RuntimeBlockStateRegistry->register()` no longer accepts an `$override` parameter.
  - `Sapling::__construct()` now accepts `SaplingType $saplingType` instead of `TreeType $treeType`
  - `utils\SignText::__construct()` now accepts two new optional parameters: `?Color $baseColor` and `bool $glowing`
  - `utils\SignText::fromBlob()` now accepts two new optional parameters: `?Color $baseColor` and `bool $glowing`
- The following API methods have been added:
  - `protected Block->describeBlockOnlyState(RuntimeDataDescriber $w) : void` - describes state properties which are discarded when the block is broken or block-picked, such as facing, powered, etc.
  - `public Block->describeBlockItemState(RuntimeDataDescriber $w) : void` - describes state properties which are kept by the item when the block is broken or block-picked, such as dye color
  - `public Block->generateStatePermutations() : \Generator<int, Block, void, void>` - yields all possible states this block type can be in (used for `RuntimeBlockStateRegistry`)
  - `public Block->getTypeTags() : array<string>`
  - `public Block->hasTypeTag(string $tag) : bool`
  - `public Block->isFireProofAsItem() : bool`
  - `public Block->onProjectileHit(Projectile $projectile, RayTraceResult $hitResult) : void`
  - `public BlockIdentifier->getBlockTypeId() : int` - returns the block's type ID according to `BlockTypeIds`
  - `public Furnace->getFurnaceType() : utils\FurnaceType`
  - `public GlazedTerracotta->getColor() : utils\DyeColor` (from `ColoredTrait`) - this was previously unsupported due to legacy limitations
  - `public GlazedTerracotta->setColor(utils\DyeColor $color) : $this` (from `ColoredTrait`) - this was previously unsupported due to legacy limitations
  - `public Leaves->getLeavesType() : utils\LeavesType` - returns the type of leaves
  - `public Wall->getConnection(int $face) : utils\WallConnectionType`
  - `public Wall->getConnections() : array<int, utils\WallConnectionType>` - returns the wall's connections and their types (see `utils\WallConnectionType`)
  - `public Wall->isPost() : bool`
  - `public Wall->setConnection(int $face, ?utils\WallConnectionType $type) : $this`
  - `public Wall->setConnections()` - sets the wall's connections and their types (see `utils\WallConnectionType`)
  - `public Wall->setPost(bool $post) : $this`
  - `public Wood->isStripped() : bool`
  - `public Wood->setStripped(bool $stripped) : $this`
  - `public static BlockBreakInfo::axe(float $hardness, ?ToolTier $toolTier = null, ?float $blastResistance = null) : BlockBreakInfo`
  - `public static BlockBreakInfo::pickaxe(float $hardness, ?ToolTier $toolTier = null, ?float $blastResistance = null) : BlockBreakInfo`
  - `public static BlockBreakInfo::shovel(float $hardness, ?ToolTier $toolTier = null, ?float $blastResistance = null) : BlockBreakInfo`
  - `public static BlockBreakInfo::tier(float $hardness, int $toolType, ToolTier $toolTier, ?float $blastResistance = null) : BlockBreakInfo`
  - `public tile\Spawnable->getRenderUpdateBugWorkaroundStateProperties(Block $block) : array<string, Tag>` - allows spawnable tiles to spoof block state properties to work around client-side rendering bugs without actually changing the block server-side
  - `public utils\SignText->getBaseColor() : \pocketmine\color\Color`
  - `public utils\SignText->isGlowing() : bool`
- The following classes now use new traits, adding API methods and/or properties:
  - `FenceGate` uses `utils\WoodTypeTrait`
  - `GlazedTerracotta` uses `utils\ColoredTrait`
  - `Planks` uses `utils\WoodTypeTrait`
  - `Wood` uses `utils\WoodTypeTrait`
  - `WoodenButton` uses `utils\WoodTypeTrait`
  - `WoodenDoor` uses `utils\WoodTypeTrait`
  - `WoodenFence` uses `utils\WoodTypeTrait`
  - `WoodenPressurePlate` uses `utils\WoodTypeTrait`
  - `WoodenSlab` uses `utils\WoodTypeTrait`
  - `WoodenStairs` uses `utils\WoodTypeTrait`
  - `WoodenTrapdoor` uses `utils\WoodTypeTrait`
- The following API interface requirements have been added (BC breaking):
  - `public utils\Fallable->getFallDamagePerBlock() : float` (default implementation provided by `utils\FallableTrait`)
  - `public utils\Fallable->getLandSound() : ?Sound` (default implementation provided by `utils\FallableTrait`)
  - `public utils\Fallable->getMaxFallDamage() : float` (default implementation provided by `utils\FallableTrait`)
  - `public utils\Fallable->onHitGround(FallingBlock $blockEntity) : bool` (default implementation provided by `utils\FallableTrait`)

### `pocketmine\command`
- Command permissions are now always checked by the server when running a command.
  - This only affects commands implemented by extending `Command`. Plugins using `PluginBase->onCommand()` are not affected by this change, since they already had permissions checked by the server anyway.
  - Previously, direct inheritors of `Command` were responsible for checking permissions, which required developers to duplicate the same code in every command, and opened lots of potential for security vulnerabilities.
  - If you want to do something on permission denied (e.g. sending a special message, or audit logging), you can do so by overriding `Command->testPermission()`, instead of baking the code directly into `Command->execute()`.
  - If you don't want to use permissions at all, just create a permission with a default of `true` (or belonging to `pocketmine.group.user`) and assign that.
- `SimpleCommandMap` now requires all commands to have a permission set when registered.
  - If you actually want to allow everyone to use your command (not advised), you can add a new permission to the `pocketmine.group.user` group, or use `default: true` for `plugin.yml` permissions.
- The following API methods have changed behaviour:
  - `Command->testPermissionSilent()` now returns `false` if there are no permissions associated with the command. This is to prevent commands with no permissions being usable by everyone, which has previously been a source of security issues.
- The following API methods have been added:
  - `public Command->getPermissions() : list<string>` - returns a list of permissions which grant usage access to this command. A user with one or more of these permissions will be able to invoke the command's `execute()` method
  - `public Command->setPermissions(list<string> $permissions) : void` - sets the permissions which grant usage access to this command. This should be used instead of `setPermission()` with `;` separators (which is now deprecated)

### `pocketmine\crafting`
- JSON models have been updated to reflect updated crafting data format.
- The following enum classes have new members:
  - `ShapelessRecipeType` has new members `CARTOGRAPHY` and `SMITHING`
- The following classes have been added:
  - `ExactRecipeIngredient` - matches an exact item
  - `MetaWildcardRecipeIngredient` - matches an item with the given legacy Minecraft ID, but any metadata value
  - `RecipeIngredient` interface
  - `TagWildcardRecipeIngredient` - matches an item based on its Minecraft tags, e.g. `minecraft:wooden_tier`
- The following API methods have signature changes:
  - `FurnaceRecipe->__construct()` now accepts `RecipeIngredient` instead of `Item`
  - `FurnaceRecipe->getInput()` now returns `RecipeIngredient` instead of `Item`
  - `PotionContainerChangeRecipe->__construct()` now accepts `string, RecipeIngredient, string` (using Minecraft string IDs instead of legacy integers).
  - `PotionContainerChangeRecipe->getIngredient()` now returns `RecipeIngredient` instead of `Item`.
  - `PotionContainerChangeRecipe->getInputItemId()` now returns `string` (using Minecraft string IDs instead of legacy integers).
  - `PotionContainerChangeRecipe->getOutputItemId()` now returns `string` (using Minecraft string IDs instead of legacy integers).
  - `PotionTypeRecipe->__construct()` now accepts `RecipeIngredient` instead of `Item`
  - `PotionTypeRecipe->getIngredient()` now returns `RecipeIngredient` instead of `Item`
  - `PotionTypeRecipe->getInput()` now returns `RecipeIngredient` instead of `Item`
  - `ShapedRecipe->__construct()` now accepts `RecipeIngredient` instead of `Item`
  - `ShapedRecipe->getIngredient()` now returns `?RecipeIngredient` instead of `?Item`
  - `ShapedRecipe->getIngredientList()` now returns `RecipeIngredient[]` instead of `Item[]`
  - `ShapedRecipe->getIngredientMap()` now returns `RecipeIngredient[][]` instead of `Item[][]`
  - `ShapelessRecipe->__construct()` `$type` parameter is now mandatory.
  - `ShapelessRecipe->__construct()` now accepts `RecipeIngredient` instead of `Item`
  - `ShapelessRecipe->getIngredientList()` now returns `RecipeIngredient[]` instead of `Item[]`

### `pocketmine\data`
- New packages `bedrock\block` and `bedrock\item` have been added. These packages contain all the necessary code for loading and saving Bedrock blocks and items from disk.
- New package `runtime` has been added. This package contains code for serializing runtime data for blocks and items.
- `LegacyToStringBidirectionalIdMap` has been reduced to `LegacyToStringIdMap`.
  - Since we never map from string ID to legacy ID, bidirectional mapping is no longer necessary.
  - This affects the following subclasses:
    - `LegacyBiomeIdToStringIdMap`
    - `LegacyBlockIdToStringIdMap`
    - `LegacyEntityIdToStringIdMap`
    - `LegacyItemIdToStringIdMap`
- The following internal API methods have been added:
  - `public LegacyToStringIdMap->add(string $string, int $legacy) : void` - adds a mapping from a custom legacy ID to custom string ID, needed for upgrading old saved data

### `pocketmine\entity`
- `Entity` now declares new abstract methods which must be implemented by subclasses:
  - `public Entity->getInitialDragMultiplier() : float`
  - `public Entity->getInitialGravity() : float`
- The following new API methods have been added:
  - `public Living->getDisplayName() : string`
- The following API methods have changed signatures:
  - `EntityFactory->register()` no longer accepts a `$legacyMcpeSaveId` parameter (now handled by internal conversions instead).
- The following API methods have been renamed:
  - `Entity->isImmobile()` -> `Entity->hasNoClientPredictions()`
  - `Entity->setImmobile()` -> `Entity->setNoClientPredictions()`
- The following internal fields have been renamed:
  - `Entity->immobile` -> `Entity->noClientPredictions`
- The following classes have been removed:
  - `EntityLegacyIds`

### `pocketmine\event`
- The following classes have inheritance changes:
  - `block\BlockPlaceEvent` no longer extends `BlockEvent`, and therefore no longer has `getBlock()`. Use `getTransaction()` instead (may contain multiple blocks).
- `BlockFormEvent` now includes information about the block which caused the event.

- The following new classes have been added:
  - `world\WorldDisplayNameChangeEvent` - called when a world's display name is changed
- The following classes have been renamed:
  - `entity\ExplosionPrimeEvent` -> `entity\EntityPreExplodeEvent`
- The following API methods have been added:
  - `public block\BlockFormEvent->getCausingBlock() : Block`
  - `public block\BlockGrowEvent->getPlayer() : ?Player` - returns the player that triggered the block growth, or `null` if it was not triggered by a player
  - `public block\BlockPlaceEvent->getTransaction() : BlockTransaction` - returns the transaction containing a list of changed block positions and the blockstates they will be changed to
  - `public server\DataPacketSendEvent->setPackets(list<ClientboundPacket> $packets) : void`
- The following API methods have changed signatures:
  - `block\BlockPlaceEvent->__construct()` now accepts `BlockTransaction $transaction` instead of `Block $blockPlace, Block $blockReplace`
  - `entity\EntityPreExplodeEvent->__construct()` has the `$force` parameter renamed to `$radius`
  - `entity\EntityPreExplodeEvent->getForce() : float` -> `entity\EntityPreExplodeEvent->getRadius() : float`
  - `entity\EntityPreExplodeEvent->setForce(float $force) : void` -> `entity\EntityPreExplodeEvent->setRadius(float $radius) : void`
- The following API methods have been removed:
  - `block\BlockPlaceEvent->getBlockReplaced()` - this information is now provided in the `BlockTransaction` object returned by `BlockPlaceEvent->getTransaction()`
- The following new API constants have been added:
  - `entity\EntityDamageEvent::CAUSE_FALLING_BLOCK`
  - `entity\EntityDamageEvent::MODIFIER_ARMOR_HELMET`

### `pocketmine\event\player`
- `PlayerPreLoginEvent`, `PlayerDuplicateLoginEvent` and `PlayerKickEvent` now supports setting separate log reasons (disconnect reason) and disconnect screen messages.
- The following classes have been removed:
  - `PlayerCommandPreprocessEvent`
- The following API methods have changed signatures:
  - `PlayerDuplicateLoginEvent->getDisconnectMessage()` now returns `Translatable|string` instead of `string`
  - `PlayerDuplicateLoginEvent->setDisconnectMessage()` now accepts `Translatable|string` instead of `string`
  - `PlayerKickEvent->getReason()` now returns `Translatable|string` instead of `string`
  - `PlayerKickEvent->setReason()` now accepts `Translatable|string` instead of `string`
  - `PlayerLoginEvent->getKickMessage()` now returns `Translatable|string` instead of `string`
  - `PlayerLoginEvent->setKickMessage()` now accepts `Translatable|string` instead of `string`
  - `PlayerPreLoginEvent->getFinalKickMessage()` now returns `Translatable|string` instead of `string`
  - `PlayerPreLoginEvent->getKickMessage()` now returns `Translatable|string|null` instead of `string|null`
  - `PlayerPreLoginEvent->setKickFlag()` (previously `setKickReason()`) now accepts `Translatable|string $disconnectReason, Translatable|string|null $disconnectScreenMessage = null` instead of `Translatable|string $message`
  - `PlayerPreLoginEvent->setKickReason()` now accepts `Translatable|string` for the `$message` parameter instead of `string`
  - `PlayerQuitEvent->getQuitReason()` now returns `Translatable|string` instead of `string`
- The following API methods have been removed:
  - `PlayerChatEvent->getFormat()` (use `PlayerChatEvent->getChatFormatter()` instead)
  - `PlayerChatEvent->setFormat()` (use `PlayerChatEvent->setChatFormatter()` instead)
  - `PlayerDuplicateLoginEvent->getDisconnectMessage()` - replaced by `getDisconnectReason()` and `getDisconnectScreenMessage()`
  - `PlayerDuplicateLoginEvent->setDisconnectMessage()` - replaced by `setDisconnectReason()` and `setDisconnectScreenMessage()`
  - `PlayerKickEvent->getReason()` - replaced by `getDisconnectReason()` and `getDisconnectScreenMessage()`
  - `PlayerKickEvent->setReason()` - replaced by `setDisconnectReason()` and `setDisconnectScreenMessage()`
- The following new API methods have been added:
  - `public PlayerChatEvent->getChatFormatter() : \pocketmine\player\chat\ChatFormatter` - returns the chat formatter to be used for this event
  - `public PlayerChatEvent->setChatFormatter(\pocketmine\player\chat\ChatFormatter $formatter) : void` - sets the chat formatter to be used for this event
  - `public PlayerDeathEvent->getDeathScreenMessage() : Translatable|string` - returns the message to be displayed on the death screen
  - `public PlayerDeathEvent->setDeathScreenMessage(Translatable|string $deathScreenMessage) : void` - sets the message to be displayed on the death screen
  - `public PlayerDuplicateLoginEvent->getDisconnectReason() : Translatable|string` - returns the reason for the disconnection displayed in the console and server log
  - `public PlayerDuplicateLoginEvent->getDisconnectScreenMessage() : Translatable|string|null` - returns the message to be displayed on the disconnect screen (the message in `getDisconnectReason()` is used if null is returned)
  - `public PlayerDuplicateLoginEvent->setDisconnectReason(Translatable|string $disconnectReason) : void` - sets the reason for the disconnection displayed in the console and server log
  - `public PlayerDuplicateLoginEvent->setDisconnectScreenMessage(Translatable|string|null $disconnectScreenMessage) : void` - sets the message to be displayed on the disconnect screen (the message in `setDisconnectReason()` is used if null is passed)
  - `public PlayerKickEvent->getDisconnectReason() : Translatable|string` - returns the reason for the disconnection displayed in the console and server log
  - `public PlayerKickEvent->getDisconnectScreenMessage() : Translatable|string|null` - returns the message to be displayed on the disconnect screen (the message in `getDisconnectReason()` is used if null is returned)
  - `public PlayerKickEvent->setDisconnectReason(Translatable|string $disconnectReason) : void` - sets the reason for the disconnection displayed in the console and server log
  - `public PlayerKickEvent->setDisconnectScreenMessage(Translatable|string|null $disconnectScreenMessage) : void` - sets the message to be displayed on the disconnect screen (the message in `setDisconnectReason()` is used if null is passed)
  - `public PlayerPreLoginEvent->getDisconnectScreenMessage(int $flag) : Translatable|string|null` - returns the message to be displayed on the disconnect screen for the specified kick flag, if set
  - `public PlayerPreLoginEvent->getFinalDisconnectScreenMessage() : Translatable|string|null` - returns the message to be displayed on the disconnect screen, taking into account the kick flags set
- The following classes have inheritance changes:
  - `PlayerPreLoginEvent` no longer implements `Cancellable`. This caused unexpected behaviour for most plugin devs due to default-ignoring cancelled events, forcing people to usually have to use `@handleCancelled` to handle the event when they wanted to use it.
- The following API constants have been renamed:
  - `PlayerPreLoginEvent::KICK_REASON_BANNED` -> `PlayerPreLoginEvent::KICK_FLAG_BANNED`
  - `PlayerPreLoginEvent::KICK_REASON_PLUGIN` -> `PlayerPreLoginEvent::KICK_FLAG_PLUGIN`
  - `PlayerPreLoginEvent::KICK_REASON_PRIORITY` -> `PlayerPreLoginEvent::KICK_FLAG_PRIORITY`
  - `PlayerPreLoginEvent::KICK_REASON_SERVER_FULL` -> `PlayerPreLoginEvent::KICK_FLAG_SERVER_FULL`
  - `PlayerPreLoginEvent::KICK_REASON_SERVER_WHITELISTED` -> `PlayerPreLoginEvent::KICK_FLAG_SERVER_WHITELISTED`
- The following API methods have been renamed:
  - `PlayerPreLoginEvent->clearAllKickReasons()` -> `PlayerPreLoginEvent->clearAllKickFlags()`
  - `PlayerPreLoginEvent->clearKickReason()` -> `PlayerPreLoginEvent->clearKickFlag()`
  - `PlayerPreLoginEvent->getFinalKickMessage()` -> `PlayerPreLoginEvent->getFinalDisconnectReason()` (now used for logs only, if a disconnect screen message is set for the highest priority flag)
  - `PlayerPreLoginEvent->getKickMessage()` -> `PlayerPreLoginEvent->getDisconnectReason()` (now used for logs only, if a disconnect screen message is set for the flag)
  - `PlayerPreLoginEvent->getKickReasons()` -> `PlayerPreLoginEvent->getKickFlags()`
  - `PlayerPreLoginEvent->isKickReasonSet()` -> `PlayerPreLoginEvent->isKickFlagSet()`
  - `PlayerPreLoginEvent->setKickReason()` -> `PlayerPreLoginEvent->setKickFlag()`

### `pocketmine\item`
#### Highlights
- `ItemFactory` has been removed. Vanilla item registration is now done via `VanillaItems`.
  - To get an item at runtime, e.g. iron ingot, use `VanillaItems::IRON_INGOT()`
  - To get a block as an item, e.g. stone, use `VanillaBlocks::STONE()->asItem()`
  - To load an item from legacy ID and meta:
    1. Use `GlobalItemDataHandlers::getUpgrader()->upgradeItemTypeDataInt()` to convert the legacy ID and meta to `SavedItemStackData`
    2. Pass the itemstack data to `GlobalItemDataHandlers::getDeserializer()` to get an `Item` instance
- Items no longer use internal Minecraft string IDs and metadata to identify themselves. All APIs associated with legacy
  IDs and/or meta have been removed.
- A new set of runtime item IDs generated from `VanillaItems` is now used to identify item types. These IDs are defined
  in `ItemTypeIds`.
  - These new IDs are primarily intended for type comparison purposes.
  - Item type IDs are used at **runtime only**. They should **NOT** be stored in configs or databases, as they are not
    guaranteed to remain the same between versions.
- In some cases, items may have additional "type data" which provides extra type information about an item. This
  replaces item metadata in some cases.
  - Type data may be used to store dynamic type information such as dye colour, potion type, etc.
  - Items must have the same type ID **and** type data in order to be stackable.
- Blocks, when represented as items:
  - retain their block type data, but not state data (for example, different colours of concrete don't stack, but things
    like facing don't affect stackability)
  - use the negative of their block type ID (e.g. a block with type ID `1` will have an item type ID of `-1`).
- Durable items (e.g. tools, armour) now use NBT `Damage` tag to store durability (like Minecraft 1.13+), instead of
  legacy meta values.
- `&$returnedItems` reference parameter is now used in some places (e.g. `onInteractBlock()`) to enable actions to return items to players without caring about whether they are in creative or anything else.
  - This eliminates boilerplate code of deciding whether to set the player's held item or not, as well as automatically dropping any overflow items that don't fit into the inventory.
  - This is used for things like filling/emptying buckets and bottles, and equipping armor.
- Blocks which previously had separate items, such as mob heads and beds, no longer do. Their item form can be acquired using `Block->asItem()` in the same way as every other block. This is facilitated by the new serializer system.

#### Implementing new items
##### In a plugin
This follows a similar process to registering blocks.

1. Get a new type ID using `ItemTypeIds::newId()` - _you'll want to keep this in a property somewhere if you want to
   compare using `getTypeId()` later_
2. Set up the item type somewhere - _this can be anywhere you like, e.g. a plugin main class property, but using
   a `RegistryTrait` class is recommended - you'll need this later to create new instances of the item_
3. Register a deserializer in `ItemDeserializer` - _needed for the item to be recognized when loaded from disk_
4. Register a serializer in `ItemSerializer` - _needed for the item to be saved to disk, and to be sent over the
   network_
5. Optionally, register a string alias for the item in `StringToItemParser` - _so that it can be given via `/give`_

To see a demo of how to do this in a plugin, see [this example plugin](https://github.com/pmmp/RegisterBlocksDemoPM5).

Again, it's acknowledged this is rather more cumbersome than it should be, but this is an ongoing process.

##### As a PocketMine-MP core contribution

To register a new vanilla item into the core, the process is slightly different:

1. Instead of using `ItemTypeIds::newId()`, add a new constant for the block to `ItemTypeIds`
2. Register the new item in `VanillaItems`
3. Follow steps 3 onwards from the plugin instructions above

#### Change list
- `Item` is no longer `json_encode()`-able.
  - The original purpose of this was to allow items to be serialized to JSON for crafting data generated from `CraftingDataPacket`. Due to changes in the generation methodology, bypassing `Item`s entirely, this is no longer necessary.
  - In addition, `jsonSerialize()` required the item to know about the method by which it will be serialized (since there is no way to inject context), creating a cyclic dependency between the `Item` implementation and its serialization method.
  - It's relatively easy to write a replacement method to encode items to JSON as you desire.
  - `Item::legacyJsonDeserialize()` (previously `Item::jsonDeserialize()`) is retained to allow loading legacy data, although it may be removed in the future.
- The following classes have been removed:
  - `Bed`
  - `ItemFactory`
  - `ItemIds`
  - `Skull`
- The following classes have been added:
  - `BoatType` - enum of all boat types
  - `CoralFan`
  - `HoneyBottle`
  - `MedicineType`
  - `Medicine`
  - `Spyglass`
  - `SuspiciousStewType`
  - `SuspiciousStew`
- The following API methods have been added:
  - `protected Item->describeState(RuntimeDataDescriber $w) : void` 
  - `public Armor->clearCustomColor() : $this` - clears the custom color of an armor item
  - `public ArmorTypeInfo->getToughness() : int`
  - `public ArmorTypeInfo->isFireProof() : bool`
  - `public Boat->getType() : BoatType`
  - `public Dye->setColor(\pocketmine\block\utils\DyeColor $color) : $this`
  - `public Item->getStateId() : int` - returns a runtime numeric state ID for comparisons including information such as coral type, dye color, etc. - DO NOT save this to disk or databases
  - `public Item->getTypeId() : int` - returns a runtime numeric type ID for comparisons - DO NOT save this to disk or databases
  - `public Item->isFireProof() : bool`
  - `public ItemIdentifer->getTypeId() : int`
  - `public Potion->setType(PotionType $type) : $this`
  - `public SplashPotion->setType(PotionType $type) : $this`
  - `public StringToItemParser->lookupAliases(Item $item) : list<string>` - returns a list of all registered aliases for the given item
  - `public StringToItemParser->lookupBlockAliases(Block $block) : list<string>` - returns a list of all registered aliases for the given block
  - `public static ItemIdentifier::fromBlock(Block $block) : self`
- The following API methods have been removed:
  - `Boat->getWoodType()`
  - `Item->getId()` - for type comparisons, use `Item->getTypeId()` instead
  - `Item->getMeta()` - use the item's specific API methods to compare information such as colour, potion type etc.
  - `Item->hasAnyDamageValue()` - for meta wildcard recipe ingredients, use `pocketmine\crafting\MetaWildcardRecipeIngredient` instead
  - `ItemIdentifier->getId()`
  - `ItemIdentifier->getMeta()`
- The following API methods have been renamed:
  - `Item::jsonDeserialize()` -> `Item::legacyJsonDeserialize()`
- The following API methods have signature changes:
  - `ArmorTypeInfo->__construct()` now accepts optional parameters `int $toughness` and `bool $fireProof`
  - `BoatType::__construct()` now accepts `BoatType $boatType` instead of `TreeType $woodType`.
  - `Item->onAttackEntity()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Item->onClickAir()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Item->onDestroyBlock()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Item->onInteractBlock()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `Item->onReleaseUsing()` now accepts `array<Item> &$returnedItems` reference parameter.
  - `ItemIdentifier->__construct()` no longer accepts a `$variant` parameter, and now expects an item type ID for the ID parameter
  - `LegacyStringToItemParser->addMapping()` now accepts a string for ID, instead of an integer
- The following API methods have behaviour changes:
  - `Item->equals()`'s `$checkDamage` parameter is now ignored, as tool damage is now stored as an NBT tag. This parameter wasn't removed due to being followed by a second `bool` parameter, which would potentially end up in the wrong place and silently cause bugs in updated plugins.
  - `Item->equals()`'s `$checkTags` parameter will now cause tool and armor damage to be checked if true.
- The following enums have new members:
  - `ToolTier` has new member `NETHERITE`

### `pocketmine\network`
- The following API methods have changed signatures:
  - `NetworkSessionManager->close()` now accepts an additional `Translatable|string|null $disconnectScreenMessage` parameter.
- The following API methods have changed signatures:
  - `query\QueryInfo->getPlayerList()` now returns `list<string>` instead of `list<Player>`
  - `query\QueryInfo->setPlayerList()` now accepts `list<string>` instead of `list<Player>`

### `pocketmine\player`
- The following API methods have changed signatures:
  - `Player->disconnect()` now accepts `Translatable|string` for `$reason` instead of `string` (to allow localized disconnect messages)
  - `Player->disconnect()` now accepts an additional `Translatable|string|null $disconnectScreenMessage` parameter, which is the message to be displayed on the disconnect screen (the message in `$reason` is used if null is passed)
  - `Player->kick()` now accepts `Translatable|string` for `$reason` instead of `string` (to allow localized kick messages)
  - `Player->kick()` now accepts an additional `Translatable|string|null $disconnectScreenMessage` parameter, which is the message to be displayed on the disconnect screen (the message in `$reason` is used if null is passed)
  - `Player->sendJukeboxPopup()` now accepts `Translatable|string` instead of `string, string[]`
- The following classes have been removed:
  - `PlayerChunkLoader` - deprecated in 4.19.0 (this was technically internal, but never marked as such)

### `pocketmine\player\chat`
- The following new classes have been added:
  - `ChatFormatter` - interface implemented by chat formatters - this is far more powerful than the old API
  - `LegacyRawChatFormatter` - implements the same behaviour previously used by `PlayerChatEvent->setFormat()`
  - `StandardChatFormatter` - formats chat messages in the vanilla Minecraft style

### `pocketmine\scheduler`
- `AsyncTask->setResult()` now works with thread-safe objects. This was previously not possible due to limitations in the `pthreads` extension.

### `pocketmine\world`
- The following API methods have been added:
  - `public World->setDisplayName(string $name) : void`
- The following API methods have changed signatures:
  - `Explosion->__construct()` has the `$size` parameter renamed to `$radius`
- The following public properties have been renamed:
  - `Explosion->size` -> `Explosion->radius`

### `pocketmine\world\format`
- Chunks are now considered dirty (modified) by default, unless loaded from a `WorldProvider` by `World`. Previously, chunks were considered unmodified by default, which allowed several pathways to bugs.
- The following classes have been added:
  - `io\GlobalBlockStateHandlers` - gives access to block data serializer, deserializer, and upgraders
  - `io\GlobalItemDataHandlers` - gives access to item data serializer, deserializer, and upgraders
  - `io\LoadedChunkData` - represents a chunk loaded from disk, along with information such as whether the chunk was upgraded and what fixes it requires
- The following new API methods have been added:
  - `public SubChunk->getBiomeArray() : PalettedBlockArray`
- The following classes have been removed:
  - `BiomeArray` - `PalettedBlockArray` is now used for 3D biome data
- The following API methods have changed signatures:
  - `Chunk->getBiomeId()` now accepts `int $x, int $y, int $z` instead of `int $x, int $z`
  - `Chunk->setBiomeId()` now accepts `int $x, int $y, int $z` instead of `int $x, int $z`
  - `Chunk->__construct()` no longer accepts `BiomeArray` as a parameter (contained in each subchunk instead)
  - `SubChunk->__construct()` now accepts `int $emptyBlockId, list<PalettedBlockArray> $blockLayers, PalettedBlockArray $biomes, ?LightArray $blockLight, ?LightArray $skyLight` instead of `int, list<PalettedBlockArray>, ?LightArray, ?LightArray`
  - `io\WorldProvider->loadChunk()` now returns `LoadedChunkData` instead of `ChunkData`
  - `io\WorldProvider->getAllChunks()` now yields `LoadedChunkData` instead of `ChunkData`
  - `io\ChunkData->__construct()` now accepts `array<int, SubChunk>, bool $populated` instead of `Chunk $chunk`
- The following API methods have been renamed:
  - `Chunk->getFullBlock()` -> `Chunk->getBlockStateId()`
  - `Chunk->setFullBlock()` -> `Chunk->setBlockStateId()`
  - `SubChunk->getFullBlock()` -> `SubChunk->getBlockStateId()`
  - `SubChunk->setFullBlock()` -> `SubChunk->setBlockStateId()`
- The following API interface requirements have been added:
  - `public io\data\WorldData->setDisplayName(string $value) : void`

### `pocketmine\world\generator\object`
- The following API methods have been removed:
  - `TreeType::fromMagicNumber()`
  - `TreeType->getMagicNumber()`

### `pocketmine\world\sound`
- The following classes have been added:
  - `CopperWaxApplySound`
  - `CopperWaxRemoveSound`
  - `DyeUseSound`
  - `InkSacUseSound`
- The following enums have new members:
  - `NoteInstrument` has new members `BELL`, `FLUTE`, `CHIME`, `XYLOPHONE`, `IRON_XYLOPHONE`, `COW_BELL`, `DIDGERIDOO`, `BIT`, `BANJO`, `PLING`
- The following API methods have been removed:
  - `NoteInstrument::fromMagicNumber()`
  - `NoteInstrument->getMagicNumber()`

## Internals
- All external usages of `KnownTranslationKeys` are now removed. All localized messages are now sent using `Translatable` objects (usually from `KnownTranslationFactory`).
- All usages of NBT keys now use class constants instead of hardcoded strings (except for an occasional overlooked one).
- Built-in commands now declare their names inside the class constructor, rather than accepting them as parameters. This improves code consistency.
- Commands now use an array for permissions internally, instead of a string separated by `;`.
- Make use of `Item->canStackWith()` instead of `Item->equals()` wherever possible, to make the code more readable.
- Moved command timings to `Timings`.
- Overriding of serializers and deserializers of items and blocks is now consistently disallowed. Since overriding stuff is non-cooperative, it doesn't make any sense in plugins, which must coexist with other plugins. If you want to modify the functionality of built-in stuff, you have several alternative options:
    - Use existing API (e.g. events, API methods) - most uses of overrides in PM4 and earlier were abuses that could have been done with events
    - Submit feature proposals or pull requests for new API to be added (e.g. new events)
    - Register completely custom items, and reuse behaviour from the item you want to mimic
    - Fork PocketMine-MP and alter the code directly - this way your plugins aren't pretending to be cooperative with other plugins
- `level.dat`, block, item, entity, tile and chunk data are now tagged with a version ID as per `VersionInfo::WORLD_DATA_VERSION`. This allows the server to apply fixes to older worlds if necessary.
- Protocol creative inventory entries are now cached in `CreativeInventoryCache` to improve performance of initial join and game mode changes.
- Singletons in the `pocketmine\network\mcpe\convert` package have been centralized under `TypeConverter`. In the future, this will be injected where needed, allowing different converters to be used for different sessions (useful for multiversion).
- `BlockStateDictionary` memory usage is now reduced from 9 MB to 3.5 MB using various techniques, including string reuse and binary-encoded states.
- `NetworkSession` disconnect APIs now accept `Translatable|string` instead of `string` to allow localized disconnect messages.
- `NetworkSession` disconnect methods have been altered to allow specifying a different disconnect reason and disconnection screen message.
- `RuntimeBlockMapping` has been renamed to `BlockTranslator`.

# 5.0.1
Released 3rd June 2023.

## Changes
- [`ext-pmmpthread` version 6.0.1](https://github.com/pmmp/ext-pmmpthread/releases/tag/6.0.1) is now required (for bug fixes).

## Fixes
- Fixed server crash when breaking blocks placed in the same session (mishandled default block states).
- Fixed spore blossoms not dropping when broken.
- Fixed jukebox music not stopping when destroyed by an explosion.

## Documentation
- Added documentation for `BlockSpreadEvent->__construct()` parameters.

# 5.1.0
Released 7th June 2023.

**For Minecraft: Bedrock Edition 1.20.0**

This is a support release for Minecraft: Bedrock Edition 1.20.0.

**Plugin compatibility:** Plugins for previous 5.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## General
- Added support for Minecraft: Bedrock Edition 1.20.0.
- Removed support for older versions.

# 5.1.1
Released 7th June 2023.

## Fixes
- Fixed blockstates being saved with the wrong version ID for 1.20.0.

# 5.1.2
Released 9th June 2023.

**This release includes changes from the following releases:**
- [4.22.1](https://github.com/pmmp/PocketMine-MP/blob/4.22.1/changelogs/4.22.md#4221) - Teleportation client bug workarounds

This release contains no other changes.

# 5.1.3
Released 1st July 2023.

**This release includes changes from the following releases:**
- [4.22.2](https://github.com/pmmp/PocketMine-MP/blob/4.22.2/changelogs/4.22.md#4222) - Authentication time bomb fix

## General
- Updated logos to new RGB-style logo. Thanks to @MrCakeSlayer and @HBIDamian for their efforts.
- Improved error messages generated by the world system when some version tags are missing from `level.dat` in Bedrock worlds.
- Outsourced Composer dependencies now only receive patch updates automatically (pinned using the `~` constraint).
  - Minor and major updates now require manually updating `composer.json`, to ensure that the plugin API is not broken by libraries getting randomly updated from one patch release to the next.

## Documentation
- Updated doc comment for `Player->setGamemode()` to remove outdated information.
- Added documentation for the `$clickVector` parameter of `Block->onInteract()` to specify that it is relative to the block's position.
- Added missing `@required` tag for `BlockStateUpgradeSchemaModelBlockRemap->newState`.

## Fixes
- Fixed blue candles not appearing in the creative inventory.
- Fixed server crash when block-picking candle cakes.
- `World->useItemOn()` now ensures that the `$clickVector` components are always in the range of 0-1. Previously, any invalid values were accepted, potentially leading to a crash.

# 5.2.0
Released 4th July 2023.

**For Minecraft: Bedrock Edition 1.20.0**

This is a minor technical update, including changes to AsyncTask error handling and support for BedrockBlockUpgradeSchema version 3.0.0.

**Plugin compatibility:** Plugins for previous 5.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe`  or `pocketmine\data` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## Core
- [BedrockBlockUpgradeSchema version 3.0.0]() is now supported.
- [`ext-pmmpthread` version 6.0.4]() is now required (bug fixes required to support technical changes in this release).

## Performance
- Improved performance of `AsyncPool->submitTask()` and `AsyncPool->submitTaskToWorker()`.
- Added new timings for `AsyncTask->onProgressUpdate()` and `AsyncTask->onCompletion()`.

## Gameplay
### Blocks
- Added the following new blocks:
  - Cherry Button
  - Cherry Door
  - Cherry Fence
  - Cherry Fence Gate
  - Cherry Leaves
  - Cherry Log
  - Cherry Planks
  - Cherry Pressure Plate
  - Cherry Sign
  - Cherry Slab
  - Cherry Stairs
  - Cherry Trapdoor
  - Cherry Wood
  - Glow Lichen
  - Piglin Head

## Tools
- `generate-block-upgrade-schema.php` now supports generating schemas a la BedrockBlockUpgradeSchema version 3.0.0, using `newFlattenedName` to reduce schema size.
- Improved property remapping detection in `generate-block-upgrade-schema.php`. It now detects related properties with more confidence (even when multiple properties were change), and no longer considers unrelated properties as mapped (e.g. `mapped_type` and `deprecated` in 1.9->1.10).

## API
### `pocketmine\data\bedrock\block`
- The following new API methods have been added:
  - `public BlockStateData->toVanillaNbt() : CompoundTag` - returns the NBT for the blockstate without any PMMP extra metadata (`toNbt()` will normally include a `PMMPDataVersion` tag).

### `pocketmine\data\runtime`
- The following new API methods have been added:
  - `public RuntimeDataDescriber->facingFlags(list<int> $faces) : void`

### `pocketmine\scheduler`
- `AsyncTask->onRun()` no longer tolerates uncaught exceptions.
  - This means that any uncaught exceptions thrown from `AsyncTask->onRun()` will now crash the worker thread, and by extension, the server.
  - This change makes it easier to debug errors by detecting them earlier.
- The following API methods have been deprecated:
  - `AsyncTask->onError()`

## Internals
- `AsyncTask->progressUpdates` is now lazily initialized when a task publishes a progress update.
  - This was previously not possible due to technical limitations of the `ext-pmmpthread` extension.
  - This change improves performance of `AsyncPool->submitTask()` and `AsyncPool->submitTaskToWorker()`, as well as reducing the amount of work needed to check for progress updates on tick.
- Errors in `AsyncWorker` now cascade and crash the whole server.
  - This makes it easier to debug errors by detecting them earlier.
  - This includes all types of unexpected errors, such as OOM, uncaught exceptions, etc.
  - This change is not expected to affect normal server operation, as worker threads are not expected to crash under normal circumstances.
- `AsyncTask::$threadLocalStorage` now uses a plain `array` instead of `ArrayObject`. The `ArrayObject` was a workaround for `ext-pthreads` to prevent thread-locals getting copied to the worker thread, and is no longer necessary.
- Regenerated `pocketmine\data\bedrock\item\ItemTypeNames` for Bedrock 1.20 (BC breaking, some item names have changed).
- Fixed `build/generate-item-type-names.php` not including some newer blockitems, such as doors and hanging signs.

# 5.2.1
Released 11th July 2023.

**This release includes changes from the following releases:**
- [4.22.3](https://github.com/pmmp/PocketMine-MP/blob/4.22.3/changelogs/4.22.md#4223) - Fixes for some crash issues

This release contains no other changes.

# 5.3.0
Released 12th July 2023.

**For Minecraft: Bedrock Edition 1.20.10**

This is a support release for Minecraft: Bedrock Edition 1.20.10.

**Plugin compatibility:** Plugins for previous 5.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe`  or `pocketmine\data` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## Interim releases
If you're upgrading directly from 5.1.x to 5.3.x, please also read the following changelogs, as the interim releases contain important changes:
- [5.2.0](https://github.com/pmmp/PocketMine-MP/blob/5.2.0/changelogs/5.2.md#520)

## Included releases
**This release includes changes from the following releases:**
- [4.23.0](https://github.com/pmmp/PocketMine-MP/blob/4.23.0/changelogs/4.23.md#4230) - Support for Minecraft: Bedrock Edition 1.20.10

## Internals
- `BlockTypeNames`, `BlockStateNames`, `BlockStateStringValues` and `ItemTypeNames` in the `pocketmine\data\bedrock` package have BC-breaking changes to accommodate Bedrock 1.20.10.

# 5.3.1
Released 14th July 2023.

## Included releases
**This release includes changes from the following releases:**
- [4.23.1](https://github.com/pmmp/PocketMine-MP/blob/4.23.1/changelogs/4.23.md#4231) - Security fixes

# 4.23.2
Released 18th July 2023.

## Fixes
- Fixed login errors due to a new `sandboxId` field appearing in the Xbox Live authentication data in `LoginPacket`. All clients, regardless of version, are affected by this change.

# 4.23.4
Released 1st August 2023.

## Fixes
- Fixed exponentially increasing lag when many hundreds of non-mergeable dropped items occupied the same space. This disproportionately affected SkyBlock servers due to large cactus farms using water to collect items together. 

# 5.3.2
Released 18th July 2023.

## Included releases
**This release includes changes from the following releases:**
- [4.23.2](https://github.com/pmmp/PocketMine-MP/blob/4.23.2/changelogs/4.23.md#4232) - Fix for `sandboxId`-related login errors

## Documentation
- Fixed documentation error in `StringToTParser`.

## Fixes
- Fixed turtle helmet not being able to be unequipped.

## Internals
- Armor pieces are no longer set back into the armor inventory if no change was made. This reduces the number of slot updates sent to clients, as well as avoiding unnecessary updates for armor pieces which have Unbreaking enchantments.

## General
- Updated `build/php` submodule to pmmp/PHP-Binaries@e0c918d1379465964acefd562d9e48f87cfc2c9e.

# 5.3.3
Released 24th July 2023.

## Included releases
**This release includes changes from the following releases:**
- [4.23.3](https://github.com/pmmp/PocketMine-MP/blob/4.23.3/changelogs/4.23.md#4233) - Various bug fixes

## Fixes
- Added a workaround for PM4 worlds with chunks corrupted by [Refaltor77/CustomItemAPI](https://github.com/Refaltor77/CustomItemAPI).
  - While this was not the fault of PocketMine-MP itself, a significant number of users were affected by this problem.
  - This error was not detected by PM4 due to missing validation of certain data which should not have existed in 1.12.
  - An error will now be logged when this corruption is detected, but the affected chunks should otherwise load normally.
- Relaxed validation of expected 3D biome array counts per chunk in LevelDB worlds.
  - Vanilla Bedrock currently saves 24 palettes (and only 24 are required), but it saved 25, 32, or 64 biome palettes per chunk in older versions.
  - Core validation for these padding biomes was very strict, enforcing exact compliance with vanilla.
  - Since only 24 palettes are actually required, the remaining palettes may now be omitted irrespective of the chunk version.
  - An error will still be logged when this mistake is detected, but the affected chunks will otherwise load normally.
- Fixed `/kill` not working on players who had (re)spawned in the 3 seconds immediately after (re)spawning (due to `noDamageTicks`).
- Fixed `/kill` not working correctly for players with high levels of Health Boost or other health-altering effects.
- Fixed netherite items being destroyed by lava.
- Fireproof entities no longer display the burning animation when in fire or lava. This does not apply to creative players, who are immortal rather than being fireproof.
- Fixed frosted ice melting in certain conditions which didn't match vanilla Bedrock.

# 5.3.4
Released 1st August 2023.

## Included releases
This release includes changes from the following releases:
- [4.23.4](https://github.com/pmmp/PocketMine-MP/blob/4.23.4/changelogs/4.23.md#4234) - Item entity lag fix

This release contains no other significant changes.

# 5.4.0
Released 1st August 2023.

**For Minecraft: Bedrock Edition 1.20.10**

This is a minor feature update, including a handful of new gameplay features, new plugin APIs and improvements to error reporting.

**Plugin compatibility:** Plugins for previous 5.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe`  or `pocketmine\data` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## General
- Improved error reporting for async task and thread crashes.
- Players may now have different creative inventories.

## Gameplay
### General
- Added support for 1.5-block height sneaking.
- Fixed missing player arm swing and sounds when punching the air.

### Blocks
- Implemented the following new blocks:
  - Big Dripleaf Head
  - Big Dripleaf Stem
  - Small Dripleaf
- Acacia saplings now grow into acacia trees.
- Fixed melon and pumpkin stems not attaching to the correct block when growing.
- Various blocks now drop more items when mined with a compatible tool enchanted with Fortune.

### Items
- Implemented Strong Slowness potion.
- Implemented Fortune enchantment.

## API
### `pocketmine\block`
- The following new classes have been added:
  - `utils\FortuneDropHelper` - utility methods for calculating the drop counts for Fortune-affected blocks
- The following new API methods have been added:
  - `protected Block->getAdjacentSupportType(int $facing) : utils\SupportType` - returns the type of support provided by the block in the given direction on the adjacent face

### `pocketmine\entity`
- The following new API constants have been added:
  - `Living::DEFAULT_KNOCKBACK_FORCE`
  - `Living::DEFAULT_KNOCKBACK_VERTICAL_LIMIT`

### `pocketmine\entity\animation`
- `ConsumingItemAnimation` now accepts `Living` instances instead of just `Human`.

### `pocketmine\event`
- The following new classes have been added:
  - `PlayerMissSwingEvent` - called when the player attempts the attack action (left click on desktop) without any target
    - This is possible thanks to the introduction of new flags in `PlayerAuthInputPacket` in Bedrock 1.20.10
- The following new API methods have been added:
  - `public EntityDamageByEntityEvent->getVerticalKnockBackLimit() : float`
  - `public EntityDamageByEntityEvent->setVerticalKnockBackLimit(float $verticalKnockBackLimit) : void` - sets the max vertical velocity that can result from the victim being knocked back

### `pocketmine\player`
- The following new API methods have been added:
  - `public Player->getCreativeInventory() : pocketmine\inventory\CreativeInventory`
  - `public Player->setCreativeInventory(pocketmine\inventory\CreativeInventory $inventory) : void`
  - `public Player->missSwing() : void` - performs actions associated with the attack action when there is no target (see `PlayerMissSwingEvent`)

### `pocketmine\scheduler`
- Cancellation functionality has been removed from `AsyncTask`, as it didn't make any sense and wasn't used by anything for what it was intended for.
  - It broke sequential task execution - later tasks might depend on state from earlier tasks
  - It didn't actually cancel the task anyway - at best, it prevented it from running, but couldn't interrupt it (though interrupting a task does not make sense either)
- The following API methods have been deprecated, and their functionality has been removed:
  - `AsyncTask->hasCancelledRun()`
  - `AsyncTask->cancelRun()`

## Internals
- Uncaught exceptions and fatal errors in `AsyncTask`, threads extending `pocketmine\thread\Thread`, and `pocketmine\thread\Worker` are now recorded in crashdumps, making it significantly easier to debug errors in these areas.
- JWT signature DER <-> raw conversions are now handled in-house using code in `JwtUtils`
  - Due to the simplicity of the conversion and only requiring a tiny subset of the ASN.1 spec, it didn't make much sense to introduce another dependency.
  - `fgrosse/phpasn1` is no longer required. This package was abandoned by its author and only used by PocketMine-MP for this one purpose.
- Various usages of `Closure::fromCallable()` have been replaced by PHP 8.1 first-class callable syntax.
- Blocks requiring support shifted to a "can be supported at" model, rather than "can be supported by".
  - This model reduces repeated logic when placing and performing nearby block updates (no need to hardcode facing everywhere).
  - In addition, this change facilitates the use of the newly introduced `Block->getAdjacentSupportType()` API method, reducing boilerplate support-type checking code.
- Bell block code has been simplified and cleaned up.
- `TallGrass` and `DoubleTallGrass` now use a shared `TallGrassTrait` to reduce code duplication.

# 5.4.1
Released 8th August 2023.

## General
- Updated translation data to [pmmp/Language 2.19.6](https://github.com/pmmp/Language/releases/tag/2.19.6).
- [`ext-pmmpthread` 6.0.7](https://github.com/pmmp/ext-pmmpthread/releases/tag/6.0.7) is now required (needed for bug fixes).

## Fixes
- Fixed Podzol not dropping itself when mined with Silk Touch.
- Fixed `World->getSafeSpawn()` not accepting positions below `y=0` (world height limit change).
- Fixed `pocketmine\thread\Thread` and `pocketmine\thread\Worker` instances not logging any information when they crash.
- Fixed `CraftItemEvent` not cloning returned items.

## Internals
- Foreach by-reference is now disallowed via a custom PHPStan rule.

# 5.4.2
Released 9th August 2023.

## Included releases
- [4.23.5](https://github.com/pmmp/PocketMine-MP/releases/tag/4.23.5) - Minor bug fixes

## Fixes
- Fixed cake accepting candle placement when slices have already been eaten.
- Fixed fire charges not lighting candles.

# 5.4.3
Released 21st August 2023.

## Included releases
- [4.23.6](https://github.com/pmmp/PocketMine-MP/blob/4.23.6/changelogs/4.23.md#4236) - Armor inventory client bug workaround

## Fixes
- Fixed crashdumps not generating correctly on fatal errors.
- Fixed `PotionCauldron::setPotionItem()` not validating the item type.
- Fixed chorus fruit not considering teleport destinations below y=0.
- Fixed cake dropping itself when mined.

# 5.5.0
Released 6th September 2023.

**For Minecraft: Bedrock Edition 1.20.10**

This is a minor feature release, including performance improvements, new API methods, and new gameplay features.

**Plugin compatibility:** Plugins for previous 5.x versions will run unchanged on this release, unless they use internal APIs, reflection, or packages like the `pocketmine\network\mcpe`  or `pocketmine\data` namespace.
Do not update plugin minimum API versions unless you need new features added in this release.

**WARNING: If your plugin uses the `pocketmine\network\mcpe` namespace, you're not shielded by API change constraints.**
Consider using the `mcpe-protocol` directive in `plugin.yml` as a constraint if you're using packets directly.

## Dependencies
- Updated `pocketmine/math` dependency to [`1.0.0`](https://github.com/pmmp/Math/releases/tag/1.0.0).
- Updated `pocketmine/nbt` dependency to [`1.0.0`](https://github.com/pmmp/NBT/releases/tag/1.0.0).

## Performance
- Some events are now no longer fired if no handlers are registered.
  - This improves performance by avoiding unnecessary object allocations and function calls.
  - Events such as `DataPacketReceiveEvent`, `DataPacketSendEvent` and `PlayerMoveEvent` are optimized away almost completely by this change, offering some much-needed performance gains.
- Significantly improved performance of small moving entities, such as dropped items.
  - This was achieved by a combination of changes, which together improved observed performance with 2000 item entities moving in water by 30-40%.
  - The benefit of this will be most noticeable in SkyBlock servers, where large cactus farms can generate thousands of dropped items.
- `World->getCollisionBoxes()` now uses an improved search method, which reduces the work done by the function by almost 90% for small entities.
  - This improves performance of collision detection for small entities, such as dropped items.

## Gameplay
### General
- Implemented enchanting using an enchanting table (yes, finally!)
  - Thanks to [@S3v3Nice](https://github.com/S3v3Nice) for investing lots of time and effort into developing this.
  - Since this feature is quite complex, it's possible there may be bugs. Please be vigilant and report any issues you find.

### Blocks
- The following new blocks have been implemented:
  - Pink Petals
- Pressure plates are now functional, in the sense that they react when entities stand on them and perform the correct logic.
  - Note that since redstone is not yet implemented, pressure plates do not activate any redstone devices, similar to buttons and levers.
- Signs can now be edited by right-clicking them.
- Signs can now be waxed using a honeycomb, which prevents them from being edited.

### Items
- The following new items have been implemented:
  - Enchanted Book

## API
### `pocketmine\block`
- The following new API methods have been added:
  - `public Block->getEnchantmentTags() : list<string>` returns a list of strings indicating which types of enchantment can be applied to the block when in item form
  - `public BlockTypeInfo->getEnchantmentTags() : list<string>`
  - `protected PressurePlate->getActivationBox() : AxisAlignedBB` - returns the AABB entities must intersect with in order to activate the pressure plate (not the same as the visual shape)
  - `protected PressurePlate->hasOutputSignal() : bool` - returns whether the pressure plate has an output signal - this should be implemented by subclasses
  - `protected PressurePlate->calculatePlateState() : array{Block, ?bool}` - returns the state the pressure plate will change to if the given list of entities are standing on it, and a bool indicating whether the plate activated or deactivated this tick
  - `protected PressurePlate->filterIrrelevantEntities(list<Entity> $entities) : list<Entity>` - returns the given list filtered of entities that don't affect the plate's state (e.g. dropped items don't affect stone pressure plates)
  - `public BaseSign->isWaxed() : bool`
  - `public BaseSign->setWaxed(bool $waxed) : $this`
  - `public inventory\EnchantInventory->getInput() : Item`
  - `public inventory\EnchantInventory->getLapis() : Item`
  - `public inventory\EnchantInventory->getOutput(int $optionId) : ?Item` - returns the item that would be produced if the input item was enchanted with the selected option, or `null` if the option is invalid
  - `public inventory\EnchantInventory->getOption(int $optionId) : EnchantOption` - returns the enchanting option at the given index
- The following API methods have signature changes:
  - `BlockTypeInfo->__construct()` now accepts an optional `list<string> $enchantmentTags` parameter
  - `PressurePlate->__construct()` now accepts an optional `int $deactivationDelayTicks` parameter
  - `WeightedPressurePlate->__construct()` now accepts optional `int $deactivationDelayTicks` and `float $signalStrengthFactor` parameters
  - `SimplePressurePlate->__construct()` now accepts an optional `int $deactivationDelayTicks` parameter
- The following new classes have been added:
  - `PinkPetals`
  - `utils\BlockEventHelper` - provides helper methods for calling block-related events
- The following classes have been deprecated:
  - `WeightedPressurePlateLight`
  - `WeightedPressurePlateHeavy`

### `pocketmine\entity`
- The following new API methods have been added:
  - `public Human->getEnchantmentSeed() : int` - returns the current seed used to randomize options shown on the enchanting table for this human
  - `public Human->setEnchantmentSeed(int $seed) : void`
  - `public Human->regenerateEnchantmentSeed() : void` - returns a new randomly generated seed which can be set with `setEnchantmentSeed()`

### `pocketmine\event`
- The following new classes have been added:
  - `block\FarmlandHydrationChangeEvent` - called when farmland is hydrated or dehydrated
  - `block\PressurePlateUpdateEvent` - called when a pressure plate is activated or changes its power output
  - `player\PlayerEnchantingOptionsRequestEvent` - called when a player puts an item to be enchanted into an enchanting table, to allow plugins to modify the enchanting options shown
  - `player\PlayerItemEnchantEvent` - called when a player enchants an item in an enchanting table
  - `world\WorldDifficultyChangeEvent` - called when a world's difficulty is changed
- The following new API methods have been added:
  - `public static Event::hasHandlers() : bool` - returns whether the event class has any registered handlers - used like `SomeEvent::hasHandlers()`
  - `public HandlerListManager->getHandlersFor(class-string<? extends Event> $event) : list<RegisteredListener>` - returns a list of all registered listeners for the given event class, using cache if available

### `pocketmine\inventory\transaction`
- The following new classes have been added:
  - `EnchantingTransaction` - used when a player enchants an item in an enchanting table

### `pocketmine\item`
- The following new API methods have been added:
  - `public Armor->getMaterial() : ArmorMaterial` - returns an object containing properties shared by all items of the same armor material
  - `public ArmorTypeInfo->getMaterial() : ArmorMaterial`
  - `public Item->getEnchantability() : int` - returns the enchantability value of the item - higher values increase the chance of more powerful enchantments being offered by an enchanting table
  - `public Item->getEnchantmentTags() : list<string>` - returns a list of strings indicating which types of enchantment can be applied to the item
  - `public ToolTier->getEnchantability() : int`
- The following API methods have signature changes:
  - `Item->__construct()` now accepts an optional `list<string> $enchantmentTags` parameter
  - `ArmorTypeInfo->__construct()` now accepts an optional `?ArmorMaterial $material` parameter
- The following new classes have been added:
  - `ArmorMaterial` - container for shared armor properties
  - `VanillaArmorMaterials` - all vanilla armor materials
  - `EnchantedBook` - represents an enchanted book item

### `pocketmine\item\enchantment`
- The following new classes have been added:
  - `AvailableEnchantmentRegistry` - enchantments to be displayed on the enchanting table are selected from here - custom enchantments may be added
  - `EnchantingHelper` - static class containing various helper methods for enchanting tables
  - `EnchantingOption` - represents an option on the enchanting table menu
  - `IncompatibleEnchantmentGroups` - list of constants naming groups of enchantments that are incompatible with each other - custom enchantments may be added using these group names to make them incompatible with existing enchantments in the same group
  - `IncompatibleEnchantmentRegistry` - manages which enchantments are considered incompatible with each other - custom enchantments may be added using existing group names to make them incompatible with existing enchantments in the same group, or to entirely new groups
  - `ItemEnchantmentTagRegistry` - manages item enchantment compatibility tags and which tags include which other tags
  - `ItemEnchantmentTags` - list of constants naming item types for enchantment compatibility checks
- The following classes have been deprecated
  - `ItemFlags`
- The following API methods have been added:
  - `public Enchantment->isCompatibleWith(Enchantment $other) : bool`
  - `public Enchantment->getMinEnchantingPower()` - returns the minimum enchanting power (derived from enchantability and number of bookshelves) needed to allow this enchantment to show on the enchanting table with a given level
  - `public Enchantment->getMaxEnchantingPower()` - upper limit of enchanting power for this enchantment to be offered on the enchanting table with a given level
- The following API methods have signature changes:
  - `Enchantment->__construct()` now accepts optional `(\Closure(int $level) : int)|null $minEnchantingPower` and `int $enchantingPowerRange` parameters
  - `Enchantment->__construct()` parameters `$primaryItemFlags` and `$secondaryItemFlags` are now deprecated and no longer used
  - `ProtectionEnchantment->__construct()` has extra parameters to reflect `Enchantment->__construct()` changes
- The following API methods have been deprecated:
  - `Enchantment->getPrimaryItemFlags()` - use API methods provided by `AvailableEnchantmentRegistry` instead
  - `Enchantment->getSecondaryItemFlags()` - use API methods provided by `AvailableEnchantmentRegistry` instead
  - `Enchantment->hasPrimaryItemType()`
  - `Enchantment->hasSecondaryItemType()`

### `pocketmine\plugin`
- The following new API methods have been added:
  - `public PluginBase->getResourcePath(string $filename) : string` - returns a URI to an embedded resource file that can be used with `file_get_contents()` and similar functions
  - `public PluginBase->getResourceFolder() : string` - returns a URI to the plugin's folder of embedded resources
- The following API methods have been deprecated:
  - `PluginBase->getResource()` - prefer using `getResourcePath()` with `file_get_contents()` or other PHP built-in functions instead

### `pocketmine\resourcepacks`
- The following new API methods have been added:
  - `public ResourcePackManager->setResourcePacksRequired(bool $value) : void` - sets whether players must accept resource packs in order to join

### `pocketmine\world\generator`
- The following new API methods have been added:
  - `public GeneratorManager->addAlias(string $name, string $alias) : void` - allows registering a generator alias without copying the generator registration parameters

### `pocketmine\world\sound`
- The following new classes have been added:
- `PressurePlateActivateSound`
- `PressurePlateDeactivateSound`

### `pocketmine\utils`
- The following new API methods have been added:
  - `public StringToTParser->registerAlias(string $existing, string $alias) : void` - allows registering a string alias without copying registration parameters

## Internals
- Various `TypeIdMap` classes in the `pocketmine\data\bedrock` package now use the new `IntSaveIdMapTrait` to reduce code duplication.
- Added a new `ServerProperties` class containing constants for all known `server.properties` keys.
- Added a new `YmlServerProperties` class containing generated constants for all known `pocketmine.yml` keys. These keys can be used with `Config->getNested()`.
