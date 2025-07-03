import React from 'react'
import { MdOutlineLocationOn } from "react-icons/md";
import { RiDeleteBin5Line } from "react-icons/ri";
import { LuArrowLeftRight } from "react-icons/lu";


const CompanyCard = ({ imageUrl, name, distance, id, onDelete, recommended }) => {
    return (
        <div
            className="group border border-gray-200 rounded-xl shadow-sm bg-white transform transition duration-300 hover:-translate-y-1 cursor-pointer"
        >
            <div className="relative h-[132px] w-full overflow-hidden rounded-t-xl">
                <img
                    src={imageUrl}
                    alt={name}
                    className="w-full h-full object-cover"
                />
                <div className="group-hover:hidden absolute top-2 left-2 bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow flex items-center gap-1 font-medium">
                    <MdOutlineLocationOn /> {distance}
                </div>
                <div className="hidden group-hover:flex absolute top-2 items-center justify-between gap-1 font-medium px-3 w-full">
                    {!recommended ? (
                        <div className='flex bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow items-center' onClick={onDelete}>
                            <RiDeleteBin5Line className='text-base' />
                        </div>
                    ) : (
                        <div></div>
                    )}
                    <div className='flex bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow items-center'>
                        <LuArrowLeftRight className='text-base' />
                    </div>
                </div>
            </div>
            <div className="p-3 font-bold text-base line-clamp-1 truncate">
                {name}
            </div>
        </div>
    )
}

export default CompanyCard
