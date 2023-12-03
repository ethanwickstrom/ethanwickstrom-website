
/**
* Homeflow Technologies | PhotoEntity.
*
* @property title
* @property description
* @property image_path
* @property thumbnail_path
* @property alt_text
* @property is_featured
* @property visibility
* @property order
* @property taken_at
* @property camera_make
* @property camera_model
* @property focal_length
* @property exposure_time
* @property aperture
* @property iso
* @property gps_latitude
* @property gps_longitude
*
* @create PhotoEntity
*/

export interface PhotoEntity {
  title: string;
  description: string;
  image_path: string;
  thumbnail_path: string;
  alt_text: string;
  is_featured: boolean;
  order: number;
  camera_make: string;
  camera_model: string;
  focal_length: string;
  exposure_time: string;
  aperture: string;
  iso: number;
  gps_latitude: number;
  gps_longitude: number;
}

