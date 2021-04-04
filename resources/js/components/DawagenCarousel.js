import React, {useState, useEffect} from 'react';
import Carousel from 'react-multi-carousel';
import 'react-multi-carousel/lib/styles.css';

import axios from 'axios';
import ReactDOM from 'react-dom';
const responsive = {
    superLargeDesktop: {
      // the naming can be any, depends on you.
      breakpoint: { max: 4000, min: 3000 },
      items: 5
    },
    desktop: {
      breakpoint: { max: 3000, min: 1024 },
      items: 3
    },
    tablet: {
      breakpoint: { max: 1024, min: 464 },
      items: 2
    },
    mobile: {
      breakpoint: { max: 464, min: 0 },
      items: 1
    }
  };
function DawagenCarousel() {
    const [data , setData] = useState([])
    useEffect(()=>{
        axios.get('/api/dawagens')
        .then(response=>{
            setData(response.data);
        });
    }, [])
    return (
      <Carousel infinite={true} autoPlay={true} autoPlaySpeed={5000} showDots={true} responsive={responsive} className="pt-5 dawagen_height">
                    {data.map(row=>(
      <div className="project_three_single wow fadeInUp" data-wow-delay="600ms" key={row.id}>

                    <div className="project_three_image img_padding">
                        <img src={"/images/wady/"+row.image}   />
                        <div className="project_three_content" style={{backgroundColor:'#534839'}}>
                            <h2 style={{color:'white', fontFamily:'Bold GE SS'}}>{row.name} </h2>
                            <h2 style={{marginTop: '-50px', color:'white', fontFamily:'Bold GE SS'}}> {row.name2}</h2>
                        </div>
                        {row.description===''?
                        <div className="project_three_hover_box">
                      </div>
                        :
                        <div className="project_three_hover_box">
                          <p>{row.description}</p>
                        </div>
                      }
                        
                    </div>
        </div>
                      ))} 
            </Carousel>

    );
}

export default DawagenCarousel;

if (document.getElementById('products')) {
    ReactDOM.render(<DawagenCarousel />, document.getElementById('products'));
}