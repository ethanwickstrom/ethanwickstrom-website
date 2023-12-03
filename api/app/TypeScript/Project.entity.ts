
/**
* Homeflow Technologies | ProjectEntity.
*
* @property user_id
* @property name
* @property description
* @property banner_picture
* @property external_url
* @property projectable_id
* @property projectable_type
*
* @create ProjectEntity
*/

export interface ProjectEntity {
  name: string;
  description: string;
  banner_picture: string;
  external_url: string;
  projectable_id: number;
  projectable_type: string;
}

