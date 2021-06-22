﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    interface IProduct
    {
        string robotHead { get; set; }
        string robotTorso { get; set; }
        string robotArms { get; set; }
        string robotLegs { get; set; }
    }
}