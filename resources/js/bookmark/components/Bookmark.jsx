import React, { useMemo, useState } from 'react';
import Carousel from 'react-multi-carousel';
import 'react-multi-carousel/lib/styles.css';
import { FaChevronLeft, FaChevronRight } from 'react-icons/fa';
import CompanyCard from './companyCard';
import { FaRegHandshake } from "react-icons/fa6";
import { RiDeleteBin5Line } from "react-icons/ri";
import { MdOutlineDriveFileRenameOutline } from "react-icons/md";
import { LuPlus } from "react-icons/lu";
import CreateFolderModal from './createFolderModal';
import DeleteConfirmationModal from './deleteConfirmationModal';

const suppliers = [
    {
        id: 1,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 2,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
    {
        id: 3,
        imageUrl: '/images/sample.jpg',
        name: 'Hereford Engineering Ltd (DEMO)',
        distance: '9 km',
    },
    {
        id: 4,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 5,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
];
const bookmark = [
    {
        id: 1,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 2,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
    {
        id: 3,
        imageUrl: '/images/sample.jpg',
        name: 'Hereford Engineering Ltd (DEMO)',
        distance: '9 km',
    },
    {
        id: 4,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 5,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
    {
        id: 6,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 7,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
    {
        id: 8,
        imageUrl: '/images/sample.jpg',
        name: 'Hereford Engineering Ltd (DEMO)',
        distance: '9 km',
    },
    {
        id: 9,
        imageUrl: '/images/sample.jpg',
        name: 'Dyfed Precision Pvt Ltd (DEMO)',
        distance: '800 m',
    },
    {
        id: 10,
        imageUrl: '/images/sample.jpg',
        name: 'A-Tek Engineering Limited',
        distance: '2.6 km',
    },
];

const Bookmark = () => {
    const [isCreateFolderModalOpen, setIsCreateFolderModalOpen] = useState(false);
    const [isDeleteConfirmationModalOpen, setIsDeleteConfirmationModalOpen] = useState(false);
    const [isDeleteCompanyConfirmationModalOpen, setIsDeleteCompanyConfirmationModalOpen] = useState(false);

    const responsive = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 5,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };
    const responsive2 = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 3,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };

    const CustomButtonGroupAsArrows = ({ next, previous, ...rest }) => {
        return (
            <div className="absolute top-4 right-3 -translate-y-1/2 z-50 flex space-x-2">
                <button
                    onClick={previous}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronLeft className='text-white' />
                </button>
                <button
                    onClick={next}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronRight className='text-white' />
                </button>
            </div>
        );
    };

    const chunkArray = (array, size) => {
        const chunked = [];
        for (let i = 0; i < array.length; i += size) {
            chunked.push(array.slice(i, i + size));
        }
        return chunked;
    };
    const grouped = chunkArray(bookmark, 2);

    const EmptyItemsMessage = () => (
        <div className="flex flex-col w-full items-center justify-center text-center text-gray-500 py-10 h-[400px]">
            <FaRegHandshake className='text-black text-2xl' />
            <h3 className='text-black text-lg font-bold'>No Suppliers Added Yet</h3>
            <p className='text-black text-sm font-normal max-w-xs'>Start adding profiles to keep track of the suppliers you’re interested in.</p>
        </div>
    )


    return (
        <>
            <div className="md:px-5 px-2 py-5 w-full">
                <div className="grid grid-cols-12 gap-4">
                    <div className="md:col-span-9 col-span-12">
                        <div className="relative bg-white border border-gray-300 rounded-lg px-4 pb-4">
                            <div className="">
                                <span className="bg-orange-500 text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Recommended Suppliers
                                </span>
                            </div>
                            <Carousel
                                responsive={responsive}
                                arrows={false}
                                customButtonGroup={<CustomButtonGroupAsArrows />}
                                infinite
                                autoPlaySpeed={3000}
                                keyBoardControl
                                customTransition="transform 700ms ease-in-out"
                                transitionDuration={500}
                                containerClass="relative pt-10 -mt-4"
                                removeArrowOnDeviceType={[]}
                                showDots={false}
                                itemClass="px-2"
                                swipeable
                            >
                                {suppliers.map((supplier) => (
                                    <CompanyCard
                                        key={supplier.id}
                                        {...supplier}
                                        recommended
                                    />
                                ))}
                            </Carousel>
                        </div>
                    </div>

                    <div className="md:col-span-3 col-span-12">
                        <div className="relative w-full h-full rounded-2xl overflow-hidden bg-gray-100">
                            <img
                                src="/images/ad.avif"
                                alt="Pine Forest"
                                className="object-cover w-full h-full rounded-2xl"
                                style={{ maxHeight: '239px' }}
                            />
                        </div>
                    </div>
                </div>
                <div className="mt-8 text-center">
                    <img
                        src="/images/logo.webp"
                        alt="Prax Engineering Ltd"
                        className="mx-auto w-40"
                    />
                    <p className="text-sm italic text-gray-500 mt-2">
                        Trust is our quality and reputation
                    </p>
                </div>

                <div className='grid grid-cols-12 gap-4 mt-8'>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-start mb-4">
                            {/* Category Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                >
                                    <option value="">Category</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Fabrication">Fabrication</option>
                                </select>
                            </div>

                            {/* Distance Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-2 pr-8 bg-white text-sm shadow-sm"                    
                                >
                                    <option value="">Distance</option>
                                    <option value="1">Within 1 km</option>
                                    <option value="5">Within 5 km</option>
                                    <option value="10">Within 10 km</option>
                                </select>
                            </div>

                            {/* Availability Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                >
                                    <option value="">Availability</option>
                                    <option value="available">Available</option>
                                    <option value="4-6 weeks">4-6 weeks</option>
                                    <option value="2-3 months">2-3 months</option>
                                </select>
                            </div>
                        </div>
                        <div className="relative border border-gray-300 rounded-lg px-4 pb-4 bg-gradient-to-br from-violet-100 to-violet-600">
                            <div className="flex gap-5">
                                <span className="bg-[#7366FF] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Bookmarked Suppliers
                                </span>
                                <div className='bg-white px-3 flex items-center justify-center border-b border-x border-[#7366FF] rounded-b-lg text-[#7366FF] font-bold text-sm'>{grouped.length}</div>
                            </div>
                            {grouped.length === 0 ? (
                                <EmptyItemsMessage />
                            ) : (
                                <Carousel
                                    responsive={responsive2}
                                    arrows={false}
                                    customButtonGroup={<CustomButtonGroupAsArrows />}
                                    infinite
                                    autoPlaySpeed={3000}
                                    keyBoardControl
                                    customTransition="transform 700ms ease-in-out"
                                    transitionDuration={500}
                                    containerClass="relative pt-10 -mt-4"
                                    removeArrowOnDeviceType={[]}
                                    showDots={false}
                                    itemClass="px-2"
                                    swipeable
                                >
                                    {grouped.map((pair, index) => (
                                        <div key={index} className="flex flex-col gap-4">
                                            {pair.map((bookmark) => (
                                                <CompanyCard
                                                    key={bookmark.id}
                                                    {...bookmark}
                                                    onDelete={() => setIsDeleteCompanyConfirmationModalOpen(true)}
                                                />
                                            ))}
                                        </div>
                                    ))}
                                </Carousel>
                            )}
                        </div>
                    </div>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-end mb-4">
                            {/* Category Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                >
                                    <option value="">Category</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Fabrication">Fabrication</option>
                                </select>
                            </div>

                            {/* Distance Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-2 pr-8 bg-white text-sm shadow-sm"                    
                                >
                                    <option value="">Distance</option>
                                    <option value="1">Within 1 km</option>
                                    <option value="5">Within 5 km</option>
                                    <option value="10">Within 10 km</option>
                                </select>
                            </div>

                            {/* Availability Filter */}
                            <div className="relative">
                                <select
                                    className="border border-gray-300 rounded-md py-2 px-4 pr-8 bg-white text-sm shadow-sm"
                                >
                                    <option value="">Availability</option>
                                    <option value="available">Available</option>
                                    <option value="4-6 weeks">4-6 weeks</option>
                                    <option value="2-3 months">2-3 months</option>
                                </select>
                            </div>
                        </div>
                        <div className="relative border bg-white border-gray-300 rounded-lg px-4 pb-4">
                            <div className="flex gap-5">
                                <span className="bg-[#22C55E] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Approved Suppliers
                                </span>
                                <div className='bg-white px-3 flex items-center justify-center border-b border-x border-[#22C55E] rounded-b-lg text-[#22C55E] font-bold text-sm'>{grouped.length}</div>
                            </div>
                            {grouped.length === 0 ? (
                                <EmptyItemsMessage />
                            ) : (
                                <Carousel
                                    responsive={responsive2}
                                    arrows={false}
                                    customButtonGroup={<CustomButtonGroupAsArrows />}
                                    infinite
                                    autoPlaySpeed={3000}
                                    keyBoardControl
                                    customTransition="transform 700ms ease-in-out"
                                    transitionDuration={500}
                                    containerClass="relative pt-10 -mt-4"
                                    removeArrowOnDeviceType={[]}
                                    showDots={false}
                                    itemClass="px-2"
                                    swipeable
                                >
                                    {grouped.map((pair, index) => (
                                        <div key={index} className="flex flex-col gap-4">
                                            {pair.map((bookmark) => (
                                                <CompanyCard
                                                    key={bookmark.id}
                                                    {...bookmark}
                                                    onDelete={() => setIsDeleteCompanyConfirmationModalOpen(true)}
                                                />
                                            ))}
                                        </div>
                                    ))}
                                </Carousel>
                            )}
                        </div>
                    </div>
                </div>

                <div className='w-full mt-5'>
                    <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4">
                        <div className="flex gap-5">
                            <span className="bg-[#3B82F6] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                Selected Suppliers
                            </span>
                            <div className='bg-white px-3 flex items-center justify-center border-b border-x border-[#3B82F6] rounded-b-lg text-[#3B82F6] font-bold text-sm'>{grouped.length}</div>
                        </div>
                        <div className='group-hover/main:flex hidden absolute z-50 top-4 right-32 gap-2'>
                            <div className='border border-gray-300 bg-white rounded-xl px-2 py-2 text-gray-500 hover:text-red-600 cursor-pointer hover:bg-gray-100 hover:scale-105' onClick={() => setIsDeleteConfirmationModalOpen(true)}>
                                <RiDeleteBin5Line className='text-sm' />
                            </div>
                            <div className='border border-gray-300 bg-white rounded-xl px-2 py-2 text-gray-500 hover:text-blue-600 cursor-pointer hover:bg-gray-100 hover:scale-105'>
                                <MdOutlineDriveFileRenameOutline className='text-sm' />
                            </div>
                        </div>
                        {bookmark.length === 0 ? (
                            <EmptyItemsMessage />
                        ) : (
                            <Carousel
                                responsive={responsive}
                                arrows={false}
                                customButtonGroup={<CustomButtonGroupAsArrows />}
                                infinite
                                autoPlaySpeed={3000}
                                keyBoardControl
                                customTransition="transform 700ms ease-in-out"
                                transitionDuration={500}
                                containerClass="relative pt-10 -mt-4"
                                removeArrowOnDeviceType={[]}
                                showDots={false}
                                itemClass="px-2"
                                swipeable
                            >
                                {bookmark.map((bookmark, index) => (
                                    <div key={index} className="flex flex-col gap-4">
                                        <CompanyCard
                                            key={bookmark.id}
                                            {...bookmark}
                                            onDelete={() => setIsDeleteCompanyConfirmationModalOpen(true)}
                                        />
                                    </div>
                                ))}
                            </Carousel>
                        )}
                    </div>
                </div>
                <div className='w-full mt-5 flex justify-center'>
                    <button className="mt-5 bg-[#5B21B6] text-white px-4 py-2 rounded-lg hover:bg-[#5a21b6da] transition-colors flex items-center gap-2 cursor-pointer" onClick={() => setIsCreateFolderModalOpen(true)}>
                        <LuPlus className="text-lg" />
                        <p className="!mb-0 text-white">Create Folder</p>
                    </button>
                </div>
            </div>
            <CreateFolderModal
                isOpen={isCreateFolderModalOpen}
                onClose={() => setIsCreateFolderModalOpen(false)}
            />
            <DeleteConfirmationModal
                isOpen={isDeleteConfirmationModalOpen}
                onClose={() => { setIsDeleteConfirmationModalOpen(false) }}
                onConfirm={() => { }}
                subtitle="You're about to delete this folder. Are you sure you want to delete?"
            />
            <DeleteConfirmationModal
                isOpen={isDeleteCompanyConfirmationModalOpen}
                onClose={() => { setIsDeleteCompanyConfirmationModalOpen(false) }}
                onConfirm={() => { }}
                subtitle="This company will also be removed from all customised group."
            />
        </>
    );
};

export default Bookmark;
