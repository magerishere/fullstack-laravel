<?php

namespace App\Services\Media;

use App\Models\User;
use Livewire\TemporaryUploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaService
{
    /**
     * @param HasMedia $model
     * @param Media|TemporaryUploadedFile $media
     * @param string $collection
     * @param string $diskName
     * @return Media
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function createMedia(HasMedia $model, Media|TemporaryUploadedFile $media, string $collection = 'default', string $diskName = 'public'): Media
    {
        return $model->addMedia($media)->toMediaCollection($collection, $diskName);
    }

    /**
     * @param User $user
     * @param Media|TemporaryUploadedFile $media
     * @param string $collection
     * @return Media
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function createUserMedia(User $user, Media|TemporaryUploadedFile $media, string $collection = 'default'): Media
    {
        return $this->createMedia($user, $media, $collection, 'users');
    }
}
