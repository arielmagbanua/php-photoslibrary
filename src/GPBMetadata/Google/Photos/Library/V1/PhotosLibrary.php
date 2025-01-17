<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace GPBMetadata\Google\Photos\Library\V1;

class PhotosLibrary
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Photos\Types\Album::initOnce();
        \GPBMetadata\Google\Photos\Types\DateRange::initOnce();
        \GPBMetadata\Google\Photos\Types\MediaItem::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�K
-google/photos/library/v1/photos_library.protogoogle.photos.library.v1google/api/client.protogoogle/api/field_behavior.protogoogle/photos/types/album.proto$google/photos/types/date_range.proto$google/photos/types/media_item.protogoogle/protobuf/any.proto google/protobuf/field_mask.protogoogle/rpc/status.protogoogle/type/date.protogoogle/type/latlng.proto"D
CreateAlbumRequest.
album (2.google.photos.types.AlbumB�A"[
%BatchRemoveMediaItemsFromAlbumRequest
media_item_ids (	B�A
album_id (	B�A"(
&BatchRemoveMediaItemsFromAlbumResponse"�
NewMediaItem
description (	F
simple_media_item (2).google.photos.library.v1.SimpleMediaItemH B
new_media_item_type":
SimpleMediaItem
upload_token (	
	file_name (	"�
AlbumPositionF
position (24.google.photos.library.v1.AlbumPosition.PositionType 
relative_media_item_id (	H %
relative_enrichment_item_id (	H "�
PositionType
POSITION_TYPE_UNSPECIFIED 
FIRST_IN_ALBUM
LAST_IN_ALBUM
AFTER_MEDIA_ITEM
AFTER_ENRICHMENT_ITEMB
relative_item"�
NewMediaItemResult
upload_token (	"
status (2.google.rpc.Status2

media_item (2.google.photos.types.MediaItem"�
BatchCreateMediaItemsRequest
album_id (	D
new_media_items (2&.google.photos.library.v1.NewMediaItemB�A?
album_position (2\'.google.photos.library.v1.AlbumPosition"m
BatchCreateMediaItemsResponseL
new_media_item_results (2,.google.photos.library.v1.NewMediaItemResult"^

DateFilter 
dates (2.google.type.Date.
ranges (2.google.photos.types.DateRange"�
ContentFilterN
included_content_categories (2).google.photos.library.v1.ContentCategoryN
excluded_content_categories (2).google.photos.library.v1.ContentCategory"�
MediaTypeFilterH
media_types (23.google.photos.library.v1.MediaTypeFilter.MediaType"0
	MediaType
	ALL_MEDIA 	
VIDEO	
PHOTO"
FeatureFilterJ
included_features (2/.google.photos.library.v1.FeatureFilter.Feature""
Feature
NONE 
	FAVORITES"�
Filters9
date_filter (2$.google.photos.library.v1.DateFilter?
content_filter (2\'.google.photos.library.v1.ContentFilterD
media_type_filter (2).google.photos.library.v1.MediaTypeFilter?
feature_filter (2\'.google.photos.library.v1.FeatureFilter
include_archived_media ($
exclude_non_app_created_data ("�
SearchMediaItemsRequest
album_id (	
	page_size (

page_token (	2
filters (2!.google.photos.library.v1.Filters"h
SearchMediaItemsResponse3
media_items (2.google.photos.types.MediaItem
next_page_token (	">
ListMediaItemsRequest
	page_size (

page_token (	"f
ListMediaItemsResponse3
media_items (2.google.photos.types.MediaItem
next_page_token (	"1
GetMediaItemRequest
media_item_id (	B�A"`
ListAlbumsRequest
	page_size (

page_token (	$
exclude_non_app_created_data ("Y
ListAlbumsResponse*
albums (2.google.photos.types.Album
next_page_token (	"(
GetAlbumRequest
album_id (	B�A"1
GetSharedAlbumRequest
share_token (	B�A"
TextEnrichment
text (	"F
Location
location_name (	#
latlng (2.google.type.LatLng"J
LocationEnrichment4
location (2".google.photos.library.v1.Location"|
MapEnrichment2
origin (2".google.photos.library.v1.Location7
destination (2".google.photos.library.v1.Location"�
NewEnrichmentItemC
text_enrichment (2(.google.photos.library.v1.TextEnrichmentH K
location_enrichment (2,.google.photos.library.v1.LocationEnrichmentH A
map_enrichment (2\'.google.photos.library.v1.MapEnrichmentH B

enrichment"�
AddEnrichmentToAlbumRequest
album_id (	B�AM
new_enrichment_item (2+.google.photos.library.v1.NewEnrichmentItemB�AD
album_position (2\'.google.photos.library.v1.AlbumPositionB�A"
EnrichmentItem

id (	"a
AddEnrichmentToAlbumResponseA
enrichment_item (2(.google.photos.library.v1.EnrichmentItem"2
JoinSharedAlbumRequest
share_token (	B�A"D
JoinSharedAlbumResponse)
album (2.google.photos.types.Album"3
LeaveSharedAlbumRequest
share_token (	B�A"
LeaveSharedAlbumResponse"q
ShareAlbumRequest
album_id (	B�AE
shared_album_options (2\'.google.photos.types.SharedAlbumOptions"H
ShareAlbumResponse2

share_info (2.google.photos.types.ShareInfo"f
ListSharedAlbumsRequest
	page_size (

page_token (	$
exclude_non_app_created_data ("f
ListSharedAlbumsResponse1
shared_albums (2.google.photos.types.Album
next_page_token (	",
UnshareAlbumRequest
album_id (	B�A"
UnshareAlbumResponse"8
BatchGetMediaItemsRequest
media_item_ids (	B�A"c
BatchGetMediaItemsResponseE
media_item_results (2).google.photos.library.v1.MediaItemResult"i
MediaItemResult"
status (2.google.rpc.Status2

media_item (2.google.photos.types.MediaItem"V
 BatchAddMediaItemsToAlbumRequest
media_item_ids (	B�A
album_id (	B�A"#
!BatchAddMediaItemsToAlbumResponse"z
UpdateAlbumRequest.
album (2.google.photos.types.AlbumB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
UpdateMediaItemRequest7

media_item (2.google.photos.types.MediaItemB�A4
update_mask (2.google.protobuf.FieldMaskB�A*�
ContentCategory
NONE 

LANDSCAPES
RECEIPTS

CITYSCAPES
	LANDMARKS
SELFIES

PEOPLE
PETS
WEDDINGS
	BIRTHDAYS	
	DOCUMENTS


TRAVEL
ANIMALS
FOOD	
SPORT	
NIGHT
PERFORMANCES
WHITEBOARDS
SCREENSHOTS
UTILITY
ARTS

CRAFTS
FASHION

HOUSES
GARDENS
FLOWERS
HOLIDAYS2�
PhotosLibraryv
CreateAlbum,.google.photos.library.v1.CreateAlbumRequest.google.photos.types.Album"���"
/v1/albums:*�Aalbum�
BatchCreateMediaItems6.google.photos.library.v1.BatchCreateMediaItemsRequest7.google.photos.library.v1.BatchCreateMediaItemsResponse"O���"/v1/mediaItems:batchCreate:*�A\'album_id,new_media_items,album_position�
BatchAddMediaItemsToAlbum:.google.photos.library.v1.BatchAddMediaItemsToAlbumRequest;.google.photos.library.v1.BatchAddMediaItemsToAlbumResponse"O���/"*/v1/albums/{album_id=*}:batchAddMediaItems:*�Aalbum_id,media_item_ids�
SearchMediaItems1.google.photos.library.v1.SearchMediaItemsRequest2.google.photos.library.v1.SearchMediaItemsResponse"5���"/v1/mediaItems:search:*�Aalbum_id�Afilters�
ListMediaItems/.google.photos.library.v1.ListMediaItemsRequest0.google.photos.library.v1.ListMediaItemsResponse"���/v1/mediaItems�
GetMediaItem-.google.photos.library.v1.GetMediaItemRequest.google.photos.types.MediaItem"8���" /v1/mediaItems/{media_item_id=*}�Amedia_item_id�
BatchGetMediaItems3.google.photos.library.v1.BatchGetMediaItemsRequest4.google.photos.library.v1.BatchGetMediaItemsResponse"0���/v1/mediaItems:batchGet�Amedia_item_ids�

ListAlbums+.google.photos.library.v1.ListAlbumsRequest,.google.photos.library.v1.ListAlbumsResponse"1���
/v1/albums�Aexclude_non_app_created_data}
GetAlbum).google.photos.library.v1.GetAlbumRequest.google.photos.types.Album"*���/v1/albums/{album_id=*}�Aalbum_id�
GetSharedAlbum/.google.photos.library.v1.GetSharedAlbumRequest.google.photos.types.Album"6���" /v1/sharedAlbums/{share_token=*}�Ashare_token�
AddEnrichmentToAlbum5.google.photos.library.v1.AddEnrichmentToAlbumRequest6.google.photos.library.v1.AddEnrichmentToAlbumResponse"^���*"%/v1/albums/{album_id=*}:addEnrichment:*�A+album_id,new_enrichment_item,album_position�
JoinSharedAlbum0.google.photos.library.v1.JoinSharedAlbumRequest1.google.photos.library.v1.JoinSharedAlbumResponse".���"/v1/sharedAlbums:join:*�Ashare_token�
LeaveSharedAlbum1.google.photos.library.v1.LeaveSharedAlbumRequest2.google.photos.library.v1.LeaveSharedAlbumResponse"/���"/v1/sharedAlbums:leave:*�Ashare_token�

ShareAlbum+.google.photos.library.v1.ShareAlbumRequest,.google.photos.library.v1.ShareAlbumResponse"H���""/v1/albums/{album_id=*}:share:*�Aalbum_id,shared_album_options�
ListSharedAlbums1.google.photos.library.v1.ListSharedAlbumsRequest2.google.photos.library.v1.ListSharedAlbumsResponse"7���/v1/sharedAlbums�Aexclude_non_app_created_data�
UnshareAlbum-.google.photos.library.v1.UnshareAlbumRequest..google.photos.library.v1.UnshareAlbumResponse"5���$"/v1/albums/{album_id=*}:unshare:*�Aalbum_id�
BatchRemoveMediaItemsFromAlbum?.google.photos.library.v1.BatchRemoveMediaItemsFromAlbumRequest@.google.photos.library.v1.BatchRemoveMediaItemsFromAlbumResponse"R���2"-/v1/albums/{album_id=*}:batchRemoveMediaItems:*�Aalbum_id,media_item_ids�
UpdateAlbum,.google.photos.library.v1.UpdateAlbumRequest.google.photos.types.Album"B��� 2/v1/albums/{album.id=*}:album�Aalbum�Aalbum,update_mask�
UpdateMediaItem0.google.photos.library.v1.UpdateMediaItemRequest.google.photos.types.MediaItem"M���.2 /v1/mediaItems/{media_item.id=*}:
media_item�Amedia_item,update_mask��Aphotoslibrary.googleapis.com�A�https://www.googleapis.com/auth/photoslibrary,https://www.googleapis.com/auth/photoslibrary.appendonly,https://www.googleapis.com/auth/photoslibrary.edit.appcreateddata,https://www.googleapis.com/auth/photoslibrary.readonly,https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddata,https://www.googleapis.com/auth/photoslibrary.sharingB|
"com.google.photos.library.v1.protoBLibraryServiceProtoPZ?google.golang.org/genproto/googleapis/photos/library/v1;librarybproto3'
        , true);

        static::$is_initialized = true;
    }
}

