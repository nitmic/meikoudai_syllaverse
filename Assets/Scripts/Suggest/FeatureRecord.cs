using UnityEngine;
using CsvHelper.Configuration.Attributes;

namespace Suggest
{
    public class FeatureRecord
    {
        [Index(0)] public int id { get; set; }
        [Index(1)] public float positionX { get; set; }
        [Index(2)] public float positionY { get; set; }
        [Index(3)] public float positionZ { get; set; }

        public Vector3 position
        {
            get => new Vector3(positionX, positionY, positionZ);
        }
    }
}
